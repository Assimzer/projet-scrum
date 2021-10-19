<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class responsable extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasOne(User::class, 'user_id');
    }
    public function promotion()
    {
        return $this->hasOne(Promotion::class, 'promotion_id');
    }
}
