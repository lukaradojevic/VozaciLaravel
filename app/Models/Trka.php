<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vozac;

class Trka extends Model
{
    use HasFactory;

    public function pobednik()
    {
        return $this->belongsTo(Vozac::class);
    }

    public function ucesnici()
    {
        return $this->hasMany(Vozac::class);
    }
}
