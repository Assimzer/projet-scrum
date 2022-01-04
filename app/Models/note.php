<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matiere;
use App\Models\Bulletin;

class note extends Model
{
    use HasFactory;

    protected $table = 'note';
    protected $fillable = ['notes', 'sousSousCoefficient'];

    public function bulletins()
    {
        return $this->belongsToMany(Bulletin::class,'composer');
    }

    public function noteToMatiere()
    {
        return $this->belongsToMany(Matiere::class,'composer');
    }

}
