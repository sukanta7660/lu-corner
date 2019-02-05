<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blogs";
    protected $primaryKey = "blogID";
    protected $fillable = ['title','description','blogcatID','userID'];

    public function user()
    {
    	return $this->belongsTo('App\User','userID');
    }
    public function category(){
        return $this->belongsTo('App\Blogcat','blogcatID');
    }
    

}
