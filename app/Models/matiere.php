<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bulletin;
use App\Models\User;
use App\Models\note;
use App\Models\Composer;

class matiere extends Model
{
    use HasFactory;

    protected $table = 'matieres';
    protected $fillable = ['id','nomMatiere' , 'sousCoefficient'];

    public function bulletins()
    {
        return $this->belongsToMany(Bulletin::class,'composer');
    }

    public function matiereToNotes()
    {
        return $this->belongsToMany(note::class, 'possede_notes', 'matiere_id', 'note_id');
    }

}
