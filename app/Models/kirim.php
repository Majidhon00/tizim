<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kirim extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function rang()
    {
        return $this->belongsTo(rang::class);
    }
    public function cat()
    {
        return $this->belongsTo(cat::class);
    }
    public function tur()
    {
        return $this->belongsTo(tur::class);
    }
}
