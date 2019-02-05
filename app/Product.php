<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $primaryKey = "productID";
    protected $fillable = ['title','description','price','file','image','staus','categoryID','subcategoryID','departmentID','userID'];

    public function poductcat()
    {
    	return $this->belongsTo('App\ProductCategory','categoryID');
    }

    public function poductSubcat()
    {
    	return $this->belongsTo('App\ProductSubCategories','subcategoryID');
    }

    public function department()
    {
    	return $this->belongsTo('App\Departments','departmentID');
    }
    public function user()
    {
    	return $this->belongsTo('App\User','userID');
    }

    
}
