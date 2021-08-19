<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model{
    protected $fillable = ['id','libellefac','datefac','prixbonconsul','prixcarnet','prixtrait','prixprod','prixtotal'];
    public function infirmieres(){
        return $this->belongsToMany(Infirmiere::class);
    }
    public function pharmaciens(){
        return $this->belongsToMany(Pharmacien::class);
    }
}
