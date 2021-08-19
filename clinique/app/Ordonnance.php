<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model{
    protected $fillable = ['id','nomp','prenomp','age','sexe','produits'];
    public function medecins(){
        return $this->belongsToMany(Medecin::class);
    }
}
