<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'locale',
    ];

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

    /**
     * Get the identities for the user.
     */
    public function identities() {
        return $this->hasMany('App\SocialIdentity');
    }

    /**
     * Get the institutos for the user.
     */
    public function institutos()
    {
        return $this->hasMany('App\Instituto');
    }

    /**
     * Get the sedes for the user.
     */
    public function sedes()
    {
        return $this->hasMany('App\Sede');
    }

    /**
     * Get the escuelas for the user.
     */
    public function escuelas()
    {
        return $this->hasMany('App\Escuela');
    }

    /**
     * Get the carreras for the user.
     */
    public function carreras()
    {
        return $this->hasMany('App\Carrera');
    }

    /**
     * Get the modulos for the user.
     */
    public function modulos()
    {
        return $this->hasMany('App\Modulo');
    }

    /**
     * Get the docentes for the user.
     */
    public function docentes()
    {
        return $this->hasMany('App\Docente');
    }
}
