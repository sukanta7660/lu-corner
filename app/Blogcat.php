<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogcat extends Model
{
	protected $table = "blogcats";
    protected $primaryKey = "blogcatID";
    protected $fillable = ['name','userID'];

    public function user()
    {
    	return $this->belongsTo('App\User','id');
    }
}
