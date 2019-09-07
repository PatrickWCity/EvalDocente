<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion', 'user_id'];
    
    /**
     * Get the user that owns the sede.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The institutos that belong to the sede.
     */
    public function institutos()
    {
        return $this->belongsToMany('App\Instituto');
    }

    /**
     * The escuelas that belong to the sede.
     */
    public function escuelas()
    {
        return $this->belongsToMany('App\Escuela', 'Sede_Escuela');
    }
}
