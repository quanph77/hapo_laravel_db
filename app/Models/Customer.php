<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customers';
    public function projects(){
    	return $this->hasMany('App\Models\Project','customer_id','id');
    }
    public function role(){
    	return $this->belongsTo('App\Models\Role','role_id','id');
    }
}
