<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matiere;
use App\Models\User;

class bulletin extends Model
{
    use HasFactory;

    protected $table = 'bulletin';
    protected $fillable = ['nomBulletin', 'appreciation'];

    public function matieres() 
    {
        return $this->belongsToMany(Matiere::class, 'matiere_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
