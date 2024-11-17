<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Industry;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class IndustryForm extends Form
{
    use WithFileUploads;
    public $mou;
    #[Validate('required|min:3|max:100')]
    public $name;

    #[Validate('required')]
    public $leader;

    #[Validate('required')]
    public $address;

    #[Validate('required')]
    public $phone;

  

    // #[Validate('required')]
    // TODO sementara tidak required
    public $exp;


    #[Validate('required')]
    public $quota;
    public $major_id;

    public $major_name;

     // Properti untuk verifikasi
    public $is_verify = 0; // Nilai default unverified

    public $processes_approved_at;


    public function save()
    {

        // dd($this->exp);
        // exit;
        $this->validate();
             $extension = $this->mou->getClientOriginalExtension();
            $name= $this->mou->getClientOriginalName();
            $encryptedName = md5($name).'.'.$extension;
            $path = $this->mou->storeAs('mou', $encryptedName,'public');

   
        Industry::create([
            'major_id' => (int) $this->major_id,
            'name' => $this->name,
            'leader' => $this->leader,
            'address' => $this->address,
            'phone' => $this->phone,
            'quota' => $this->quota,
            'user_id' => Auth::id(),
            'is_verify' => $this->is_verify,
            'date_expired' => $this->exp,
            'mou' => $path, 
        ]); 
        $this->reset();

    }

    public function update($id)
    {
        $this->validate();

        $industry = Industry::findOrFail($id);
        if ($this->mou) {
            $extension = $this->mou->getClientOriginalExtension();
            $name= $this->mou->getClientOriginalName();
            $encryptedName = md5($name).'.'.$extension;
            $path = $this->mou->storeAs('mou', $encryptedName,'public');
        }
        else{
            $path = $industry->mou;
        }
        $industry->update([
            'major_id' => (int) $this->major_id,
            'name' => $this->name,
            'leader' => $this->leader,
            'address' => $this->address,
            'phone' => $this->phone,
            'quota' => $this->quota,
            'user_id' => Auth::id(),
            'is_verify' => $this->is_verify,
            'date_expired' => $this->exp,
            'mou' => $path
        ]);

        $this->reset();
    }
}
