<?php

namespace App\Models;

use App\Models\PossedeType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class uploadfile extends Model
{
    use HasFactory;
    protected $table = 'uploadfile';
    protected $fillable = ['id', 'name','path'];


    
}