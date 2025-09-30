<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['title' => 'Post 1', 'content' => 'Contenido del post 1', 'tags' => ['tag1', 'tag2', 'tag3']],
            ['title' => 'Post 2', 'content' => 'Contenido del post 2', 'tags' => ['tag4', 'tag5', 'tag6']],
            ['title' => 'Post 3', 'content' => 'Contenido del post 3', 'tags' => ['tag7', 'tag8', 'tag9']],
        ]; 


       
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        return "Aquí se procesará el formulario para guardar un post";
    }

    public function show($post)
    {
      //  return view('posts.show',['post'=>$post]);
        return view('posts.show',compact('post'));
    }   

     public function edit($post)
    {
        return view('posts.edit',compact('post'));
    }

    public function update($post)
    {
        return "Aquí se procesará el formulario para actualizar el post: $post";
    }

    public function destroy($post)
    {
        return "Aquí se procesará la solicitud para eliminar el post: $post";
    }
    
}