<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class convoquer extends Model
{
    use HasFactory;
    
    public function users() 
    {
        return $this->belongsToMany(User::class, 'user_id');
    }
    public function entretien() 
    {
        return $this->belongsToMany(Entretien::class, 'entretien_id');
    }
}
