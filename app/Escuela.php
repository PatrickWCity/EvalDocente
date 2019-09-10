<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion', 'user_id'];
    
    /**
     * Get the user that owns the escuela.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The sedes that belong to the escuela.
     */
    public function sedes()
    {
        return $this->belongsToMany('App\Sede', 'sede_escuela');
    }

    /**
     * The carreras that belong to the escuela.
     */
    public function carreras()
    {
        return $this->belongsToMany('App\Carrera', 'escuela_carrera');
    }
}
