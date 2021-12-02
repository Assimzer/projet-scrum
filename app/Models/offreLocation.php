<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Offre;

class offreLocation extends Model
{
    use HasFactory;

    protected $table = 'offreLocation';
    protected $fillable = ['ville'];

    public function offre()
    {
        return $this->hasOne(Offre::class, 'offre_id');
    }
}
