<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Offre;

class offreSkills extends Model
{
    use HasFactory;

    protected $table = 'offre_skills';
    protected $fillable = ['skill'];

    public function offres()
    {
        return $this->belongsToMany(Offre::class, 'offre_id');
    }
    public function offreSkills()
    {
        return $this->belongsToMany(offre::class, 'contien_skill', 'offre_id', 'offre_skills_id');
    }
}
