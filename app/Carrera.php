<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion', 'user_id'];
    
    /**
     * Get the user that owns the carrera.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The escuelas that belong to the carrera.
     */
    public function escuelas()
    {
        return $this->belongsToMany('App\Escuela', 'escuela_carrera');
    }

    /**
     * The modulos that belong to the carrera.
     */
    public function modulos()
    {
        return $this->belongsToMany('App\Modulo');
    }
}
