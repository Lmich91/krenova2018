<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function profil(){
        return $this->hasMany('App\Profil');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function pengantarkota(){
        return $this->hasOne('App\Pengantarkota');
    }
}
