<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PossedeType extends Model
{
    use HasFactory;

    protected $table = 'possedeType';
    protected $fillable = ['possede_id'];

    public function offres()
    {
        return $this->belongsTo(PossedeType::class, 'offre_id');
    }
    public function offreType()
    {
        return $this->hasMany(OffreType::class, 'offreType_id');
    }

}
