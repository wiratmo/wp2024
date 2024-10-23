<?php

namespace App\Livewire;

use App\Models\Request;
use App\Models\Teacher;
use Livewire\Component;
use App\Models\Industry;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
class RequestsPage extends Component
{
    use WithPagination, WithFileUploads;

    public $request;
    public $teacher;
    public $industryId;
    public $selectedIndustry;
    public $selectedRequest;
    public $requestId;
    public $letter;
    public $response_doc;
    public $response_status;

    public function request_pkl()
    {
        Request::create([
            'user_id' => Auth::id(),
            'industry_id' => $this->industryId,
            'status' => 'pending',
        ]);

        $this->render();
        $this->dispatch('close-modal');
        flash()->addSuccess('Pengajuan berhasil diajukan.');
    }


    public function save(){

        $this->validate([
            'response_doc' => 'mimes:png,jpg,pdf|max:1024|required',
        ]);
        $this->response_doc->storeAs('public/response_docs', $this->response_doc->hashName());
        $_request = Request::find($this->requestId);
        $_request->status = $this->response_status;
        $_request->letter = $this->response_doc->hashName();
        $_request->save();
        $this->render();
        $this->dispatch('close-modal');
        flash()->addSuccess('Pengajuan berhasil diajukan. '.$this->response_status);
    }



    #[On('open-request')]
    public function update($id)
    {
        $this->industryId = $id;
        $this->selectedIndustry = Industry::find($id);
    }

    #[On('upload_form')]
    public function upload_form($id)
    {
        $this->requestId = $id;
    }


    // admin side
    #[On('process-request')]
    public function proccess($id)
    {
        $this->requestId = $id;
        $this->selectedRequest = Request::find($id);
        $this->teacher = $this->selectedRequest->teacher_id;
        if ($this->selectedRequest->status == 'pending') {
            $this->selectedRequest->update([
                'status' => 'process',
            ]);
        }
    }

    public function accept()
    {
        $request = Request::find($this->requestId);
        if ($request->status == 'accepted') {
            $request->update([
                'teacher_id' => (int)$this->teacher,
            ]);
        }

        if ($request->status == 'process') {
            $request->update([
                'status' => 'accepted',
                'teacher_id' => (int)$this->teacher,
            ]);
        }
        $this->dispatch('close-modal');
    }

    public function reject()
    {
        $request = Request::find($this->requestId);
        if ($request->status == 'process') {
            $request->update([
                'status' => 'rejected',
            ]);
        }
        $this->dispatch('close-modal');
    }

    #[On('relist-request')]
    public function relist($id)
    {
        $this->requestId = $id;
        $request = Request::find($this->requestId);
        if ($request->status == 'rejected') {
            $request->update([
                'status' => 'relisted',
            ]);
        }
    }

    #[On('render-request')]
    public function render()
    {
        $user = Auth::user();
        $industries = collect();

        // Retrieve the authenticated user's students
        $students = $user->students;

        // Collect all the unique major IDs from the user's students
        $majorIds = $students->pluck('major_id')->unique();

        // If there are major IDs, fetch the industries related to those major IDs
        if ($majorIds->isNotEmpty()) {
            $industries = Industry::whereIn('major_id', $majorIds)->paginate(10);
        }

        $teacher = Auth::user()->teachers->first();

        if ($teacher) {
            $teacherStudentCompanions = Request::where('teacher_id', $teacher->id)->paginate(10);
        } else {
            $teacherStudentCompanions = collect(); // No teacher found, return empty collection
        }

        $this->request = Request::where('user_id', Auth::id())->where('status', '!=', 'relisted')->get();
        return view('livewire.requests-page', [
            'industries' => $industries,
            'requests' => Request::paginate(20),
            'teachers' => Teacher::get(),
            'teacherStudentCompanions' => $teacherStudentCompanions,
        ]);
    }
}
