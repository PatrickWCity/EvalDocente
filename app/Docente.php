<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'appat', 'apmat', 'user_id'];
    
    /**
     * Get the user that owns the docente.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The modulos that belong to the docente.
     */
    public function modulos()
    {
        return $this->belongsToMany('App\Modulo', 'Modulo_Docente');
    }
}
