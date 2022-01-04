<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\matiere;

class SousMatiere extends Model
{
    use HasFactory;
    protected $table = 'sous_matieres';
    protected $fillable = ['matiere_groupe','matiere_associer'];

    public function matiere()
    {
        return $this->belongsTo(matiere::class, 'matiere_id');
    }
}
