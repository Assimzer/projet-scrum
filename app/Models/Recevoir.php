<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\User;
Use App\Models\bulletin;

class Recevoir extends Model
{
    use HasFactory;
    protected $table = 'recevoir';
    protected $fillable = ['matiere_id','bulletin_id'];

    public function users()
    {
        return $this->hasMany(User::class, 'user_id');
    }

    public function bulletins()
    {
        return $this->hasMany(bulletin::class, 'bulletin_id');
    }
}
