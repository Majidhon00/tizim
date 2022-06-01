<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rang extends Model
{
    use HasFactory;
    public function tur()
    {
        return $this->belongsTo(tur::class,'tur_id');
    }
   protected $guarded = [];
}
