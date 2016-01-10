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

	// Hold data from the respective models
    var $brands;
    var $categories;
    var $products;
    //title and meta description for SEO
    var $title;
    var $description;

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
        if(!$detailedProduct)
        {
            return redirect('/products')->withErrors('requested page not found');
        }
        return view('product_details', array('detailedProduct' => $detailedProduct,'page' => 'products', 'categories' => $this->categories,'brands' => $this->brands,'products' => $this->products));
    }

    public function product_categories($name) {
        return view('products', array('title' => 'Welcome','description' => '','page' => 'products', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function product_brands($name) {
        $products = Product::where('brand_id',$name)->paginate(9);
        return view('products', array('brands' => $this->brands, 'categories' => $this->categories, 'products' => $products));
    }

    public function GetContactUsForm() {
        return view('contact_us', array('brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

}
