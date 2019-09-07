<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion', 'user_id'];
    
    /**
     * Get the user that owns the modulo.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The carreras that belong to the modulo.
     */
    public function carreras()
    {
        return $this->belongsToMany('App\Carrera');
    }

    /**
     * The docentes that belong to the modulo.
     */
    public function docentes()
    {
        return $this->belongsToMany('App\Docente', 'Modulo_Docente');
    }
}
