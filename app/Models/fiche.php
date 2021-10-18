<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fiche extends Model
{
    use HasFactory;

    protected $table = 'fiche';
    protected $fillable = ['demandeurEmploi', 
    'autreDemandeur', 'formationProjet', 
    'connaissance', 'motivation', 'niveauScolaire',
    'experiencePro', 'experienceProText', 'atouts',
    'difficulteSolution', 'entrepriseTrouver', 'posteConforme',
    'demarche', 'typeEntreprise', 'secteurGeo', 'bilan', 
    'amenagement', 'permis', 'vehicule' ];

    public function entretien()
    {
        return $this->belongsTo(Entretien::class, 'entretien_id');
    }


}
