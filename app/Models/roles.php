<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class roles extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $fillable = ['profileType'];

    public function users()
    {
        return $this->hasMany(User::class, 'users_id');
    }
}
