<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traitement extends Model{
    protected $fillable = ['id','libelletrait' ,'date_trait' ,'auteur'];
    public function medecins(){
        return $this->belongsToMany(Medecin::class);
    }
    public function patients(){
        return $this->belongsToMany(Patient::class);
    }
}
