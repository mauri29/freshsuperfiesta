<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
    	alert()->info("Preis/Precio: {$post->price}.- CHF/u <br>-<br> Gewicht/Peso: {$post->weight} kg/u", "{$post->title}")->html()->persistent("OK");
    	return view('post.post')->with([
    		'post' => $post,
    	]);
    }
}
