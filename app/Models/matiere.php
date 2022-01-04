<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bulletin;
use App\Models\User;
use App\Models\note;
use App\Models\Composer;
use App\Models\SousMatiere;
class matiere extends Model
{
    use HasFactory;

    protected $table = 'matieres';
    protected $fillable = ['id','nomMatiere' , 'sousCoefficient'];

    public function bulletins()
    {
        return $this->belongsToMany(Bulletin::class,'composer');
    }

    public function matiereToNote()
    {
        return $this->belongsToMany(note::class,'composer');
    }

    public function sousMatiere(){
        return $this->hasMany(SousMatiere::class,'sous_matiere_id');
    }

}
