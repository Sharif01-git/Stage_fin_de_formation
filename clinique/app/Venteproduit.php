<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venteproduit extends Model{
    protected $fillable = ['id','libelleprod','qtevente','prixunit','prixtotal','pharmacien_id'];
    public function pharmaciens(){
        return $this->belongsToMany(Pharmacien::class);
    }
}
