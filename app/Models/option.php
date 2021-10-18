<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Promotion;
use App\Models\User;

class option extends Model
{
    use HasFactory;

    protected $table = 'option';
    protected $fillable = ['optionNom'];

    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'promotion_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
