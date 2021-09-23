<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model{
    protected $fillable = ['id','nomp','prenomp','datefac','prixbonconsul','prixcarnet','prixtrait','prixprod','statu','prixtotal','patient_id'];
    public function infirmieres(){
        return $this->belongsToMany(Infirmiere::class);
    }
    public function pharmaciens(){
        return $this->belongsToMany(Pharmacien::class);
    }
}
