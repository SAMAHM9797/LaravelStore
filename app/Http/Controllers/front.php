<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
Use App\User;
use DB;
use App\Quotation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Cart;
use Illuminate\Pagination\LengthAwarePaginator;
class Front extends Controller {

	// Hold data from the models;
    var $brands;
    var $categories;
    var $products;

    public function __construct() {
        $this->brands = Brand::all();
        $this->categories = Category::all();
        $this->products = Product::all();
    }

    public function index() {
        $this->products->load("brands","categories");
        return view('main', array('brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function products() {
        $products = Product::paginate(9);
        return view('products', array('brands' => $this->brands, 'categories' => $this->categories, 'products' => $products));
    }

    public function product_details($id) {

        $this->products->load("categories","brands");
        $detailedProduct = Product::with("categories","brands")->find($id);
            return view('product_details', array('detailedProduct' => $detailedProduct,'page' => 'products', 'categories' => $this->categories,'brands' => $this->brands,'products' => $this->products));
    }

    public function product_categories($id) {
        return view('products', array('title' => 'Welcome','description' => '','page' => 'products', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function product_brands($id) {
        $products = Product::where('brand_id',$id)->paginate(9);
        return view('products', array('brands' => $this->brands, 'categories' => $this->categories, 'products' => $products));
    }

    public function GetContactUsForm() {
        return view('contact_us', array('brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

}
