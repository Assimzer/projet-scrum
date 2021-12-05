<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\offreLocation;
use App\Models\offreType;
use App\Models\PossedeType;
use App\Models\offreSkills;
use App\Models\User;
class offre extends Model
{
    use HasFactory;

    protected $table = 'offre';
    protected $fillable = [
    'titre',
    'date',
    'description',
    'resumer',
    'telephone',
    'ville',
    'pdf',
    'entreprise_name',
    ];

    

    public function possede_type()
    {
        return $this->belongsTo(PossedeType::class, 'possede_type_id');
    }
    public function offreType()
    {
        return $this->belongsTo(OffreType::class,'offreType_id');
    }
    
    public function offreSkills()
    {
        return $this->belongsToMany(offreSkills::class, 'contien_skill', 'offre_id', 'offre_skills_id');
    }
    public function offreLocation()
    {
        return $this->belongsTo(OffreLocation::class,'offreLocation_id');
    }
    public function postuler_offre(){
        return $this->belongsToMany(PostulerOffre::class);
    }
}

