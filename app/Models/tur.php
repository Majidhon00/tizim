<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tur extends Model
{
    use HasFactory;
    public function kat()
    {
        return $this->belongsTo(cat::class,'cat_id');
    }
    protected $guarded = [];
}
