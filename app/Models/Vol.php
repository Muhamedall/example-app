<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Vol extends Model
{
    use HasFactory;
    protected $fillable=[
        'airport_depart_id',
        'airport_arrivee_id',
        'compagnie_id ',
        'avion_id',
        'date_depart',
        'date_arivie',
    ];
    public function  airportDepart(){
        return $this->belongsTo('App\aéroport ,airport_depart_id ,id ');
    }
}
