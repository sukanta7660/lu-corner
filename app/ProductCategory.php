<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = "product_categories";
    protected $primaryKey = "categoryID";
    protected $fillable = ['name','userID'];

    public function user()
    {
    	return $this->belongsTo('App\User','id');
    }
}
