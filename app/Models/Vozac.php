<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tim;
use App\Models\Trka;

class Vozac extends Model
{
    use HasFactory;

    public function tim()
    {
        return $this->belongsTo(Tim::class);
    }

    public function trke()
    {
        return $this->hasMany(Trka::class);
    }
}
