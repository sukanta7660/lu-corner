<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $table = "departments";
    protected $primaryKey = "departmentID";
    protected $fillable = ['name','userID'];

    public function user()
    {
    	return $this->belongsTo('App\User','id');
    }
}
