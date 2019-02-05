<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogcmt extends Model
{
    protected $table = "blogcmts";
    protected $primaryKey = "blogcmtID";
    protected $fillable = ['comment','blogID','userID',];

    public function user()
    {
    	return $this->belongsTo('App\User','userID');
    }
}
