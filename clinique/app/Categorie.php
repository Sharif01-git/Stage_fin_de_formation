<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['id','nom','slug'];
    public function produits(){
        return $this->belongsToMany('App\Produit');
    }
}
