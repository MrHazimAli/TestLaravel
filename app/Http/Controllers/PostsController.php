<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Post Model
use App\Post;

class PostsController extends Controller
{
		//function to handle create
    public function create() {
    	return view('posts.create');
    }

    public function store() {

    	//communicate with Post Model
    	// Post::create(request['title','body']);

    	// return redirect('/');
    }

    public function index() {
    	//get all post descending order by latest.. get() return all data.
    	$posts = Post::latest()->get();

    	//call posts.index and give back all the data
    	return view('index', compact('posts'));
    }

}
