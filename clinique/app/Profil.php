<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model{
    protected $fillable = ['id','libelleprofil'];
    public function users(){
        return $this->hasMany(User::class);
    }
}
