<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model{
    protected $fillable = ['id','nomp','prenomp','age','sexe','profession','tel','nationalite','maladiepart','adressep','allergie'
   ,'Email','temperature','poids','tension','pouls','taille','groupage'];
    public function infirmieres(){
        return $this->belongsToMany(Infirmiere::class);
    }
    public function medecins(){
        return $this->belongsToMany(Medecin::class);
    }
    public function traitements(){
        return $this->hasMany(Traitement::class);
    }
    public function consultations(){
        return $this->hasMany(Consultation::class);
    }
    public function dossiermedicals(){
        return $this->hasMany(Dossiermedical::class);
    }
}
