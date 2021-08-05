<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model{
    protected $fillable = ['id','nom','prenom','email','email_verified_at','password'];

    public function users(){
        return $this->hasMany(User::class);
    }
}
