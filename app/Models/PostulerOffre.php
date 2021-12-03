<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostulerOffre extends Model
{
    use HasFactory;

    protected $fillable = ['date_postulation'];

    public function offre()
    {
        return $this->belongsTo(Offre::class, 'offre_id');
    }
    public function user()
    {
        return $this->belongTo(User::class, 'user_id');
    }
}
