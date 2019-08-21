<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task_Report extends Model
{
    protected $table = 'task_reports';
    public function task(){
    	return $this->belongsTo('App\Models\Task','task_id');
    }
    public function report(){
    	return $this->belongsTo('App\Models\Report','report_id');
    }
}
