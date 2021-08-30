<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public function getprix(){
        $prix = $this->prix/1000;

        return number_format($prix, 3, ' ', '') . 'FCFA';
    }
    public function categories()
    {
        return $this->belongsToMany('App\Categorie');
    }
    public function pharmaciens(){
        return $this->belongsToMany(Pharmacien::class);
    }

}
