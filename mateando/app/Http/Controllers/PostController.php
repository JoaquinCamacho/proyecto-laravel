<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(){

        $posts = Post::with('category')->get();

        return view('post', [
        'posts' => $posts
    ]);
    }

    public function view(int $id){
        return view('post-detalle',[
            'post'=> Post::with('category')->findOrFail($id)
        ]);
    }

    public function admin()
    {   
        $posts = Post::with('category')->get();

        return view('admin.posts.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.posts.create', [
            'categories' => $categories
    ]);
}

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:5|max:255',
            'contenido' => 'required|min:10',
            'autor' => 'required',
            'category_id' => 'required|exists:categories,id',
            'fecha_publicacion' => 'required|date'
    ]);

        Post::create([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
            'autor' => $request->autor,
            'categoria' => Category::find($request->category_id)->nombre,
            'category_id' => $request->category_id,
            'fecha_publicacion' => $request->fecha_publicacion
    ]);

    return redirect()->route('admin.posts')
    ->with('success', '¡Publicación creada correctamente!');
    }


    public function edit(int $id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();

        return view('admin.posts.edit', [
            'post' => $post,
            'categories' => $categories
        ]);
    }
    
    public function update(Request $request, int $id)
    {
        $request->validate([
            'titulo' => 'required|min:5|max:255',
            'contenido' => 'required|min:10',
            'autor' => 'required',
            'category_id' => 'required|exists:categories,id',
            'fecha_publicacion' => 'required|date'
    ]);

    $post = Post::findOrFail($id);

    $post->update([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
            'autor' => $request->autor,
            'categoria' => Category::find($request->category_id)->nombre,
            'category_id' => $request->category_id,
            'fecha_publicacion' => $request->fecha_publicacion
    ]);

    return redirect()->route('admin.posts')
    ->with('success', '¡Publicación actualizada correctamente!');

}
}
