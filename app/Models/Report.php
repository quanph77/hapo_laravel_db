<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function task_reports(){
    	return $this->hasMany('App\Models\Task_Report');
    }
    public function user(){
    	return $this->belongsTo('App\Models\User','user_id');
    }
}
