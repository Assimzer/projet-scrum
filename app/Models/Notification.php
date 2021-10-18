<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notifications';
    protected $fillable = [
        'id',
        'message',
        'created_at',
        'updated_at',
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
