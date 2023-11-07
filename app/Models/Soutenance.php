<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soutenance extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function Demande() {
        return $this->belongsTo(Demande::class, 'demandes_id');
    }

    function Salle() {
        return $this->belongsTo(Salle::class, 'salles_id');
    }

    function Jury() {
        return $this->belongsTo(Jury::class, 'juries_id');
    }
}
