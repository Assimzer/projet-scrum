<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bulletin;

class Periode extends Model
{
    use HasFactory;
    protected $table = 'periodes';
    protected $fillable = ['dateDebut','dateFin'];

    public function bulletins()
    {
        return $this->belongsToMany(Bulletin::class,'composer');
    }
}
