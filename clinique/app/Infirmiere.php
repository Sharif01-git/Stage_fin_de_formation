<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infirmiere extends Model{
    protected $fillable = ['id','nomi','prenomi'];
    public function factures(){
        return $this->hasMany(Facture::class);
    }
    public function bonconscarn(){
        return $this->hasMany(Bonconscarn::class);
    }
    public function patients(){
        return $this->hasMany(Patient::class);
    }
    public function rendezvous(){
        return $this->hasMany(Rendezvous::class);
    }
}
