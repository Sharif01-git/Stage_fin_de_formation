<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model{
    protected $fillable = ['id','libellefacture','prixboncarn','prixconsult','prixtrait','prixprod','prixtotal','pharmacien_id','infirmiere_id'];
    public function infirmieres(){
        return $this->belongsToMany(Infirmiere::class);
    }
    public function pharmaciens(){
        return $this->belongsToMany(Pharmacien::class);
    }
}
