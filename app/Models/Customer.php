<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function projects(){
    	return $this->hasMany('App\Models\Project');
    }
    public function role(){
    	return $this->belongsTo('App\Models\Role');
    }
}
