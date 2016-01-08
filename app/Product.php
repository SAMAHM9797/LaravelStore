<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'products';
    protected $url = 'imgurl';
    protected $fillable = array('name', 'description','price','category_id','brand_id','created_at_ip', 'updated_at_ip');


    public function Brands(){
    	return $this->belongsTo('App\Brand','brand_id');
    }

    public function Categories(){
    	return $this->belongsTo('App\Category','category_id');
    }
}


