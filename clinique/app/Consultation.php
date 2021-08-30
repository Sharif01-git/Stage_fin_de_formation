<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model{
    protected $fillable = ['id','nomp','prenomp','allergie','maladiepart','motifconsul' ,'dateconsult' ,'maladiepart' ,'allergie' ,'modevie' ,'histoire' ,'diagnostic' ,'conduite','patient_id'];
    public function medecins(){
        return $this->belongsToMany(Medecin::class);
    }
    public function patients(){
        return $this->belongsToMany(Patient::class);
    }
}
