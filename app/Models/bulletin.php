<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\matiere;
use App\Models\User;
use App\Models\Composer;
use App\Models\Recevoir;
class bulletin extends Model
{
    use HasFactory;

    protected $table = 'bulletins';
    protected $fillable = ['nomBulletin', 'appreciation'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function matieres()
    {
        return $this->belongsToMany(matiere::class,'composer');
    }
    
}
