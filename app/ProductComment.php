<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    protected $table = "product_comments";
    protected $primaryKey = "productcommentID";
    protected $fillable = ['productcomment','productID','userID'];

    public function poduct()
    {
    	return $this->belongsTo('App\Product','productID');
    }
    public function user(){
        return $this->belongsTo('App\User','userID');
    }

}
