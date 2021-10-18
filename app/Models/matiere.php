<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bulletin;
use App\Models\User;

class matiere extends Model
{
    use HasFactory;

    protected $table = 'matiere';
    protected $fillable = ['nomMatiere' , 'sousCoefficient'];

    public function bulletins()
    {
        return $this->belongsToMany(Bulletin::class, 'bulletin_id');
    }

    public function users()
    {
        return $this->belongsToMAny(User::class, 'users_id');
    }
}
