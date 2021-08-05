<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model{
    protected $fillable = ['id','Libelleconsul','dateconsultation','prix','tension','temperature','poids','pouls','tail','groupage','diagnostic','medecin_id','patient_id'];
    public function medecins(){
        return $this->belongsToMany(Medecin::class);
    }
    public function patients(){
        return $this->belongsToMany(Patient::class);
    }
}
