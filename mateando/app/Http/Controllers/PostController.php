<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(){

        $posts = Post::all();

        return view('post', [
        'posts' => $posts
    ]);
    }
    public function view(int $id){
        return view('post-detalle',[
            'post'=> Post::findOrFail($id)
        ]);
    }
}
