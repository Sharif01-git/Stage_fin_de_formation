<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bonconscarn extends Model{
    protected $fillable = ['id','libelle','prixachat','infirmiere_id'];

    public function infirmieres(){
        return $this->belongsToMany(Infirmiere::class);
    }
}
