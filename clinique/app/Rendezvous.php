<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rendezvous extends Model
{
    protected $fillable = ['id','nomd','prenomd','aged','professiond','nationalited','adresse','contact','emaild','sexed','heured'
    ,'dater','motifr'];
    public function medecins(){
        return $this->belongsToMany(Medecin::class);
    }
    public function infirmieres(){
        return $this->belongsToMany(Infirmiere::class);
    }
}
