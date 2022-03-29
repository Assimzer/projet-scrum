<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filepdf extends Model
{
    use HasFactory;

    protected $table = 'filepdfs';
    protected $fillable = ['name', 'path'];
}
