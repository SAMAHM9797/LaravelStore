@extends('layouts.layout')

@section('content') 
<section id="advertisement">
    <div class="container">
        <img src="images/shop/advertisement.jpg" alt="" />
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
          
            </div>
            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">Latest From our Blog</h2>
                    @foreach($posts as $post)
                    <div class="single-blog-post">
                        <h3>{{ $post->title }}</h3>
                        <div class="post-meta">
                            <ul>
                                <li><i class="fa fa-user"></i> {{$post->author->name}}</li>
                                <li><i class="fa fa-clock-o"></i>{{$post->created_at->format(' h:i a') }} </li>
                                <li><i class="fa fa-calendar"></i>{{$post->created_at->format('M d,Y') }} </li>
                            </ul>
                            <span>
                            </div>
                            <a href="">
                                <img src="images/blog/blog-one.jpg" alt="">
                            </a>
                            <p>{{$post->body}}</p>
                            <a  class="btn btn-primary" href='{{ route('blogpost',[$post->id]) }}'>Read More</a>
                        </div>
                        @endforeach
                        {{$posts->render()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection