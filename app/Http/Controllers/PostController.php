<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Quotation;
use App\Brand;
use App\Category;
use App\Product;
Use App\User;
use App\Post;
use App\Comments;
use Auth;

class PostController extends Controller
{
	

	public function index()
	{
		$posts = Post::orderBy('created_at','desc')->paginate(5);
		return view('blog')->withPosts($posts);
	}

	public function show($id)
	{
		$post = Post::With("comments")->find($id);
		if($post)
		{
			return view('blog_post')->withPost($post);
		}
		return Redirect::action('PostController@index');
	}

	public function create(Request $request)
	{
		if($request->user()->can_post())
		{
			return view('posts.create');
		}    
		else 
		{
			return redirect('/')->withErrors('You have not sufficient permissions for writing post');
		}
	}

}
