<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bestand extends Model
{

    protected $table = 'bestanden';

    public function schijf()
    {
        return $this->belongsTo('App\Schijf', 'schijf', 'naam');
    }

    public function mapModel()
    {
        return $this->belongsTo('App\Map', 'map');
    }

    public function bestandstype()
    {
        return $this->belongsTo('App\Bestandstype', 'bestandstype', 'naam');
    }


    public function scopeBestandsnaam($query, $naam)
    {
        return $query->where('naam', 'like', '%' . $naam . '%');
    }

    public function scopeSchijfnaam($query, $schijfNaam)
    {
        return $query->where('schijf', 'like', '%' . $schijfNaam . '%');
    }

}
