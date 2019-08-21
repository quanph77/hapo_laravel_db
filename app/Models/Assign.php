<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{
    protected $table = 'assigns';
    public function project(){
    	return $this->belongsTo('App\Models\Project','project_id');
    }
}
