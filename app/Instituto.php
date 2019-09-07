<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion', 'user_id'];

    /**
     * Get the user that owns the instituto.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The sedes that belong to the instituto.
     */
    public function sedes()
    {
        return $this->belongsToMany('App\Sede');
    }
}
