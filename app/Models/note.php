<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matiere;
use App\Models\Periode;

class note extends Model
{
    use HasFactory;

    protected $table = 'note';
    protected $fillable = ['notes', 'sousSousCoefficient'];

    public function matieres()
    {
        return $this->belongsToMany(Matiere::class, 'matiere_id');
    }

    public function periode()
    {
        return $this->belongsTo(Periode::class, 'periode_id');
    }
}
