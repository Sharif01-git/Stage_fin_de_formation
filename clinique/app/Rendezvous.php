<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model{
    protected $fillable = ['id','dater','heured','heuref','medecin_id','infirmiere_id'];
    public function medecins(){
        return $this->belongsToMany(Medecin::class);
    }
    public function infirmieres(){
        return $this->belongsToMany(Infirmiere::class);
    }
}
