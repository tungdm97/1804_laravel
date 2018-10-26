<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
    	$post = Post::all();
    	// dd($post->toArray());
    	$count = Post::count();
    	$publicPost =  Post::where('status',1)->get();
    	return view('listPost', ['posts'=>$post]);
    }

    public function store(){
    	$post = new Post();
    	$post->title = "new post";
    	$post->description = "new des";
    	$post->status = 1;
    	$post->save();
    	return Post::all();

    }
    public function update(){
    	$post = Post::find(1);
    	$post->title = "update post";
    	$post->description = "update des";
    	$post->save();
    	return Post::all();
    }
    public static function delete(){
    	$post = Post::find(1);
    	$post->delete();
    	
    	return Post::all();
    }
}
