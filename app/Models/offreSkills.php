<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Offre;

class offreSkills extends Model
{
    use HasFactory;

    protected $table = 'offreSkills';
    protected $fillable = ['skill'];

    public function offres()
    {
        return $this->belongsToMany(Offre::class, 'offre_id');
    }
}
