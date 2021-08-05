<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model{
    protected $fillable = ['id','libelleord','contenu','medecin_id'];
    public function medecins(){
        return $this->belongsToMany(Medecin::class);
    }
}
