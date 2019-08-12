<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function customer(){
    	return $this->belongsTo('App\Models\Project');
    }
    public function tasks(){
    	return $this->haveMany('App\Models\Task');
    }
    public function assigns(){
    	return $this->haveMany('App\Models\Assign');
    }
}
