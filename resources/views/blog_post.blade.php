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
                <div class="left-sidebar">
                    @include('shared.sidebar')
                </div>
            </div>
            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">Latest From our Blog</h2>
                    <div class="single-blog-post">
                        <h3>{{$post->title}}</h3>
                        <div class="post-meta">
                            <ul>
                               <li><i class="fa fa-user"></i> {{$post->author->name}}</li>
                               <li><i class="fa fa-clock-o"></i>{{$post->created_at->format(' h:i a') }} </li>
                               <li><i class="fa fa-calendar"></i>{{$post->created_at->format('M d,Y') }} </li>
                           </ul>

                       </div>
                       <img src="{{asset('images/blog/blog-one.jpg')}}" alt="">
                       <p>{{$post->body}}</p>
                   </div>
                   </div><!--/blog-post-area-->
               <div class="response-area">
                  <ul class="media-list">
                      <h2>{{count($post->comments)}} Comments</h2>
                      @foreach ($comments as $comment) 

                      <li class="media">
                        <div class="media-body">
                            <ul class="sinlge-post-meta">
                                <li><i class="fa fa-user"></i>{{$comment->author->name}}</li>
                                <li><i class="fa fa-clock-o"></i> {{$comment->created_at->format(' h:i a') }}</li>
                                <li><i class="fa fa-calendar"></i> {{$comment->created_at->format('M d,Y') }}</li>
                            </ul>
                            <p>{{$comment->body}}</p>
                            <a class="btn btn-primary" href=""><i class="fa fa-reply"></i>Reply</a>
                        </div>
                    </li>
                    @endforeach
                </ul>					
            </div><!--/Response-area-->
            <div class="row">
                <h2>Leave a reply</h2>
                <div class="col-sm-12">
                    <div class="text-area">
                        <div class="blank-arrow">
                            <label>Comment</label>
                        </div>
                        <span>*</span>
                        <textarea name="message" rows="11"></textarea>
                        <a class="btn btn-primary" href="">post comment</a>
                    </div>
                </div>
            </div>
        </div>	
    </div>
</div>
</section>

@endsection