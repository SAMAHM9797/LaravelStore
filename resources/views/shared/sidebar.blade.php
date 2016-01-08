
<!-- to do 
<h2>Category</h2>
<div class="panel-group category-products">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                @foreach ($categories as $category)
                <li><a href="{{url('products/brands/$category->name')}}"> <span class="pull-right"></span>{{$category->name}}</a></li>
                @endforeach
            </h4>
        </div>
    </div>
</div>
-->

<div class="brands_products"><!--brands_products-->
    <h2>Brands</h2>
    <div class="brands-name">
        <ul class="nav nav-pills nav-stacked">
           @foreach ($brands as $brand)
           <li><a href='{{url("products/brands/$brand->id")}}'> <span class="pull-right"></span>{{$brand->name}}</a></li>
           @endforeach
       </ul>
   </div>
</div><!--/brands_products-->

