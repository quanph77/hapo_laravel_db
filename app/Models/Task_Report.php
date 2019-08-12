<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task_Report extends Model
{
    public function task(){
    	return $this->belongsTo('App\Models\Task');
    }
    public function report(){
    	return $this->belongsTo('App\Models\Report');
    }
}
