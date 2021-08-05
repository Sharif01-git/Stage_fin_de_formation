<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacien extends Model{
    protected $fillable = ['id','nomp','prenomp'];
    public function produits(){
        return $this->belongsToMany(Produit::class);
    }
    public function venteproduits(){
        return $this->hasMany(Venteproduit::class);
    }
    public function factures(){
        return $this->hasMany(Facture::class);
    }
}
