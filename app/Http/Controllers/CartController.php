<?php

namespace App\Http\Controllers;


use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Cart;

class CartController extends Controller
{
 

    public function cart() {
        if(Request::isMethod('post')){
           $this->cartAdd();
        }

       if (Request::get('product_id')){
         $this->CartProductAmount();
        }

        $cart = Cart::content();
        return view('cart')->with('cart',$cart);
    }

    public function cartProductAmount()
    {
        $rowId = Cart::search(array('id' => Request::get('product_id')));
        $item = Cart::get($rowId[0]);
        if ((Request::get('increment')) == 1){
            Cart::update($rowId[0], $item->qty + 1);
        }
        else if((Request::get('decrease')) == 1){
           Cart::update($rowId[0], $item->qty - 1);
        }
    }

    public function cartAdd()
    {
        $product_id = Request::get('product_id');
        $product = Product::find($product_id);
        Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price));
    }

    public function clear_cart() {
        Cart::destroy();
        return Redirect::away('cart');
    }
}
