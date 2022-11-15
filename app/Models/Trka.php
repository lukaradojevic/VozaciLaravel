<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vozac;

class Trka extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'grad',
        'drzava',
        'fond',
        'pobednik_id',
    ];


    public function pobednik()
    {
        return $this->belongsTo(Vozac::class);
    }

    public function ucesnici()
    {
        return $this->hasMany(Vozac::class);
    }
}
