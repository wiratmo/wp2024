<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\detailRole;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory, HasRoles, Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function requests(): HasMany
    {
        return $this->hasMany(Request::class);
    }

    public function teachers(): HasMany
    {
        return $this->hasMany(Teacher::class);
    }

    public function details(): HasMany
    {
        return $this->hasMany(DetailRole::class, 'user_id');
    }

    public function scopeSearch($query, $value)
    {
        if ($value) {
            $query->where('name', 'like', '%' . $value . '%')->orWhere('username', 'like', '%' . $value . '%')->orWhere('email', 'like', '%' . $value . '%');
        }
    }

    public function scopeStudentSubmission($query,$industriesId)
    {
        return $query
                ->join('students', 'users.id', '=', 'students.user_id')
                ->join('majors', 'majors.id', '=', 'students.major_id')
                ->join('requests', 'requests.user_id', '=', 'users.id')
                ->join('industries', 'industries.id', '=', 'requests.industry_id')
                ->where('industries.id', $industriesId)
                ->select([
                    'users.name as name',
                    'students.NIS as NIS' ,
                    'students.NISN as NISN' ,
                    DB::raw("concat('XII ' ,majors.acronym,' ' ,students.group) as class"),
                    'majors.name as major_name' ,
                    'industries.name as industry_name',
                    'industries.leader as industry_leader',
                    'industries.address as industry_address',
                    ]
                )->get();
    }

}
