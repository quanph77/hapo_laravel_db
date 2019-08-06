<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    public function role(){
    	return $this->belongsTo('App\Models\Role','role_id');
    }
    public function assigns(){
    	return $this->hasMany('App\Models\Assign','user_id');
    }
    public function tasks(){
    	return $this->hasMany('App\Models\Task','user_id');
    }
    public function reports(){
    	return $this->hasMany('App\Models\Report','user_id');
    }
}
