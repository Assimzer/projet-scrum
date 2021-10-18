<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Note;
use App\Models\Promotion;

class periode extends Model
{
    use HasFactory;

    protected $table = 'periode';
    protected $fillable = ['dateDebut', 'dateFin'];

    public function note()
    {
        return $this->belongsTo(Note::class, 'note_id');
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'promotion_id');
    }
}
