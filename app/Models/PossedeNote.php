<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PossedeNote extends Model
{
    use HasFactory;
    protected $table = 'possede_notes';
    protected $fillable = ['matiere_id','note_id'];

    public function offres()
    {
        #return $this->belongsTo(PossedeType::class, 'offre_id');
    }
}
