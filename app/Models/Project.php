<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    public function customer(){
    	return $this->belongsTo('App\Models\Project','customer_id');
    }
    public function tasks(){
    	return $this->haveMany('App\Models\Task','project_id');
    }
    public function assigns(){
    	return $this->haveMany('App\Models\Assign','project_id');
    }
}
