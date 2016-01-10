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
		// Hold data from the respective models
	var $brands;
	var $categories;
	var $products;

	public function __construct() {
		$this->brands = Brand::all();
		$this->categories = Category::all();
		$this->products = Product::all();
	}

	public function index()
	{
		$posts = Post::orderBy('created_at','desc')->paginate(5);

		return view('blog', array('posts' => $posts, 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
	}

	public function show($id)
	{
	    $post = Post::With("comments")->find($id);
	    $comments = $post->comments;
		return view('blog_post', array('post' => $post, 'brands' => $this->brands, 'comments' => $comments, 'categories' => $this->categories, 'products' => $this->products));
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

	public function Save(PostFormRequest $request)
	{
		$post = new Posts();
		$post->title = $request->get('title');
		$post->body = $request->get('body');
		$post->author_id = $request->user()->id;
		if($request->has('save'))
		{
			$post->active = 0;
			$message = 'Post saved successfully';            
		}            
		else 
		{
			$post->active = 1;
			$message = 'Post published successfully';
		}
		$post->save();
		return redirect('edit/'.$post->slug)->withMessage($message);
	}
}
