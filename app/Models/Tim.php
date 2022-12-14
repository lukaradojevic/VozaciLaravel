<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vozac;

class Tim extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'sef',
        'email',
        'sajt'
    ];

    public function vozaci()
    {
        return $this->hasMany(Vozac::class);
    }
}
