<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dossiermedical extends Model{
    protected $fillable = ['id','libelledoss','diagnostic','patient_id','date_creation'];
    public function medecins(){
        return $this->belongsToMany(Medecin::class);
    }
    public function patients(){
        return $this->hasMany(Patient::class);
    }
}
