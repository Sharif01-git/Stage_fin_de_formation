<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traitement extends Model{
    protected $fillable = ['id','Libelletrait' ,'date_traitement' ,'auteur' ,'medecin_id' ,'patient_id'];
    public function medecins(){
        return $this->belongsToMany(Medecin::class);
    }
    public function patients(){
        return $this->belongsToMany(Patient::class);
    }
}
