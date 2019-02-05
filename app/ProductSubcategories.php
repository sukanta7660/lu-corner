<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSubcategories extends Model
{
    protected $table = "product_subcategories";
    protected $primaryKey = "subcategoryID";
    protected $fillable = ['name','categoryID','userID'];

    public function user()
    {
    	return $this->belongsTo('App\User','id');
    }
    public function category()
    {
    	return $this->belongsTo('App\ProductCategory','categoryID');
    }
}
