<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model{
    protected $fillable = ['id','nomm','prenomm'];
    public function dossiermedicals(){
        return $this->belongsToMany(Dossiermedical::class);
    }
    public function rendezvous(){
        return $this->hasMany(Rendezvous::class);
    }
    public function ordonnances(){
        return $this->hasMany(Ordonnance::class);
    }
    public function traitements(){
        return $this->hasMany(Traitement::class);
    }
    public function consultations(){
        return $this->hasMany(Consultation::class);
    }
}
