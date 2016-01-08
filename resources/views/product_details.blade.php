@extends('layouts.layout')

@section('content')  
<section id="advertisement">
    <div class="container">
        <img src="{{asset('images/shop/advertisement.jpg')}}" alt="" />
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    @include('shared.sidebar')
                </div>
            </div>

            <!--product-details-->
            <div class="col-sm-9 padding-right">
                <div class="product-details">
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="../../{{$detailedProduct->imgurl}}" alt="" />
                        </div>
                    </div>
                    <!--/product-information-->
                    <div class="col-sm-7">
                        <div class="product-information">
                            <h2>{{$detailedProduct->name}}</h2>
                              <form method="POST" action="{{url('cart')}}">
                                            <input type="hidden" name="product_id" value="{{$detailedProduct->id}}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-fefault add-to-cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </button>
                                        </form>
                            <p><b>Availability:</b>In Stock</p>
                            <p><b>Brand:</b> {{($detailedProduct->brands->name)}}</p>
                            <p><b>Price</b> £{{($detailedProduct->price)}}</p>
                        </div>
                    </div>
                </div>
                <!--tabs-->
                <div class="category-tab shop-details-tab">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class = "active"><a href="#details" data-toggle="tab">Details</a></li>
                            <li><a href="#companyprofile" data-toggle="tab">More From {{$detailedProduct->brands->name}}</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="details" >
                           <p> {{$detailedProduct->description}} </p>
                       </div>


                       <!--this is for items from the same company-->
                       <div class="tab-pane fade" id="companyprofile" >
                        @foreach ($products as $product)
                        @if($product->brands->name == $detailedProduct->brands->name)
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="../../{{$product->imgurl}}" alt="fail" />
                                        <h2>£{{$product->price}}</h2>
                                        <p>{{$product->name}}</p>
                                         <form method="POST" action="{{url('cart')}}">
                                            <input type="hidden" name="product_id" value="{{$detailedProduct->id}}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-fefault add-to-cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                   @endif
                        @endforeach
                    </div>

                    <!--this is for items from the same category-->
                     <div class="tab-pane fade" id="category"></div>
                    <div class="tab-pane fade" id="reviews"></div>

                
            </div>

    
    </div>
</div>
</div>
</section>
@endsection