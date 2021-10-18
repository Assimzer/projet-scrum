<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\offreLocation;
use App\Models\offreType;
use App\Models\offreSkills;

class offre extends Model
{
    use HasFactory;

    protected $table = 'offre';
    protected $fillable = ['titre', 'date', 'description', 'téléphone', 'pdf'];

    public function offreLocation()
    {
        return $this->belongsTo(offreLocation::class, 'offreLocation_id');
    }

    public function offreTypes()
    {
        return $this->belongsToMany(OffreType::class, 'offreType_id');
    }

    public function offreSkills()
    {
        return $this->belongsToMany(offreSkills::class, 'offreSkills_id');
    }
}
