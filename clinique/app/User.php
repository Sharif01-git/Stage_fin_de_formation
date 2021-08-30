<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id','name','prenom','email','password','telephone' ,'adresse' ,'profil','administrateur_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function administrateurs(){
        return $this->belongsToMany(Administrateur::class);
    }
    public function profils(){
        return $this->belongsToMany(Profil::class);
    }
    public function users(){
        return $this->morphTo();
    }
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
    public function dossiermedicals(){
        return $this->belongsToMany(Dossiermedical::class);
    }
    public function ordonnances(){
        return $this->hasMany(Ordonnance::class);
    }
    public function traitements(){
        return $this->hasMany(Traitement::class);
    }
    public function consultations(){
        return $this->hasMany(Consultation::class);
    }
    public function produits(){
        return $this->belongsToMany(Produit::class);
    }
    public function venteproduits(){
        return $this->hasMany(Venteproduit::class);
    }


}
