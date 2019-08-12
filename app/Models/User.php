<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function role(){
    	return $this->belongsTo('App\Models\Role');
    }
    public function assigns(){
    	return $this->hasMany('App\Models\Assign');
    }
    public function tasks(){
    	return $this->hasMany('App\Models\Task');
    }
    public function reports(){
    	return $this->hasMany('App\Models\Report');
    }
}
