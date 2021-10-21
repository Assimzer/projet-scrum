<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Offre;

class offreType extends Model
{
    use HasFactory;

    protected $table = 'offreType';
    protected $fillable = ['type'];

    public function offres()
    {
        return $this->belongsToMany(Offre::class, 'offre_id');
    }
    

}
