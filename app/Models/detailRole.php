<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailRole extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_role',
        'id_user',
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
