<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model{
    protected $fillable = ['id','nomprod','qtestock','prixprod'];
    public function pharmaciens(){
        return $this->belongsToMany(Pharmacien::class);
    }
}
