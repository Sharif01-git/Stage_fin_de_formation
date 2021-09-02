<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['id','image','stock','nomprod','slug','description','prix'];
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
