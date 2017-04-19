<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Post $post)
    {
        //Alert::info('Wir hoffen, diese Infos gefallen dir | Esperamos, esta información sea de tu agrado', 'Blog Time!')->persistent("Super Fiesta")->autoclose(10000);
        //SI NO FUNCIONA EL LATESTFIRST...
        //return view('blog.blog')->with(['posts' => $post->orderBy('created_at', 'desc')->get(),]);
    	
        return view('blog.blog')->with([
            'posts' => $post->orderBy('created_at', 'desc')->isLive()->get(), 
            'posts' => Post::paginate(21),
        ]);
    }

    public function tagged(Tag $tag)
    {
    	return view('posts.tag')->with([
    		'posts' => $tag->posts()->orderBy('created_at', 'desc')->isLive()->get(),
    		'tag' => $tag,
    		//'posts' => $post->latestFirst()->get(),
            //SI NO FUNCIONA EL LATESTFIRST...
    	]);
    }
}
