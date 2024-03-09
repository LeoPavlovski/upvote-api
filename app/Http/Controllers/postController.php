<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    //
    public function index(){
        //Retrun the posts in the database records.
        $posts = Post::all();
        return PostResource::collection($posts);
    }
    public function increase(Post $post, Request $request){
        $validatedData = $request->validate([
            'upvote'=>'integer',
        ]);
        $post->update($validatedData);
        return new PostResource($post);
    }
}
