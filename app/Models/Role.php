<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    public function customers(){
    	return $this->hasMany('App\Models\Customer','role_id','id');
    }
    public function users(){
    	return $this->hasMany('App\Models\User','role_id','id');
    }
}
