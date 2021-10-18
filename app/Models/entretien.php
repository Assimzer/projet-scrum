<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class entretien extends Model
{
    use HasFactory;

    protected $table = 'entretien';
    protected $fillable = ['date', 'decision'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_id');
    }

    public function fiche()
    {
        return $this->belongsTo(Fiche::class, 'fiche_id');
    }
}
