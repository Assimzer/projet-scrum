<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fiche extends Model
{
    use HasFactory;

    protected $table = 'fiche';
    protected $fillable = ['id', 
    'title', 
    'description' , 
    'nomCandidat', 
    'prenomCandidat', 
    'email', 
    'address', 
    'permis', 
    'vehicule', 
    'optionDeSIO', 
    'entrepriseTrouvee', 
    'conformeAFormation', 
    'demarcheRealisee', 
    'demandeEmploi', 
    'amenagement', 
    'adequationFormProjet', 
    'niveauScolaire',
    'experiencePro'];

    public function entretien()
    {
        return $this->belongsTo(Entretien::class, 'entretien_id');
    }


}
