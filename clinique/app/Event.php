<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['id','title','start','end'];
    public function medecins(){
        return $this->belongsToMany(Medecin::class);
    }
    public function infirmieres(){
        return $this->belongsToMany(Infirmiere::class);
    }
}
