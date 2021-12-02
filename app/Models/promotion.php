<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Periode;

class promotion extends Model
{
    use HasFactory;

    protected $table = 'promotion';
    protected $fillable = ['nomPromotion', 'anneePromotion'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_id');
    }

    public function periode()
    {
        return $this->belongsTo(Periode::class, 'periode_id');
    }
    public function option()
    {
        return $this->belongsToMany(Option::class, 'option_id');
    }
    public function promotion()
    {
        return $this->belongsToMany(Promotion::class, 'promotion_id');
    }
}
