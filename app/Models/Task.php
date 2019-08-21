<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    public function project(){
    	return $this->belongsTo('App\Models\Project','project_id');
    }
    public function user(){
    	return $this->belongsTo('App\Models\User','user_id');
    }
    public function users(){
    	return $this->hasMany('App\Models\Task_Report');
    }
}
