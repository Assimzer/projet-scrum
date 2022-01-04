<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\matiere;
use App\Models\User;
use App\Models\Composer;
use App\Models\Recevoir;
use App\Models\note;
use App\Models\Periode;
class bulletin extends Model
{
    use HasFactory;

    protected $table = 'bulletins';
    protected $fillable = ['nomBulletin', 'appreciation','bulletin_index','user_id'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function matieres()
    {
        return $this->belongsToMany(matiere::class,'composer')->withPivot('commentaire', 'coefGlobal','note_id','periode_id');
    }

    public function note()
    {
        return $this->belongsToMany(note::class,'composer')->withPivot('commentaire', 'coefGlobal','note_id','periode_id');
    }

    public function periode()
    {
        return $this->belongsToMany(Periode::class,'composer')->withPivot('commentaire', 'coefGlobal','note_id','periode_id');
    }
    
}
