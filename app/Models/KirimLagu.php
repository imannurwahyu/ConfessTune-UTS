<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KirimLagu extends Model
{
    use HasFactory;

    protected $table = 'kirim_lagu';
    protected $fillable = ['to', 'lagu_id', 'pesan'];

    public function lagu()
    {
        return $this->belongsTo(Lagu::class);
    }
}
