@extends('layouts.layout')

@section('content')       
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            @if(count($cart))
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $item)
                    <tr>
                        <td class="cart_product">
                         <h4>{{$item->name}}</a></h4>
                     </td>

                     <td class="cart_price">
                        <p>£{{$item->price}}</p>
                    </td>
                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                          <a class="cart_quantity_up" href='{{url("cart?product_id=$item->id&increment=1")}}'> + </a>
                          <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">
                          <a class="cart_quantity_down" href='{{url("cart?product_id=$item->id&decrease=1")}}'> - </a>

                      </div>
                  </td>
                  <td class="cart_total">
                    <p class="cart_total_price">£{{$item->subtotal}}</p>
                </td>

            </tr>
            @endforeach
            @else
            <p>You have no items in the shopping cart</p>
            @endif
        </tbody>
    </table>
</div>
</div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>Buy Now</h3>
            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
        </div>
        <div class="col-sm-6">
            <div class="total_area">
                <ul>
                    <li>Total <span>£{{Cart::total()}}</span></li>
                </ul>
                <a class="btn btn-default update" href="{{url('clear-cart')}}">Clear Cart</a>
                <a class="btn btn-default check_out" href="{{url('checkout')}}">Check Out</a>
            </div>
        </div>
    </div>
</section><!--/#do_action-->
@endsection