<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Hola desde la página de posts";
    }   

    public function create()
    {
        return "Aquí se mostrará el formulario para crear un post";
    }

    public function store()
    {
        return "Aquí se procesará el formulario para guardar un post";
    }

    public function show($post)
    {
        return "Aquí se mostrará el post: $post";
    }

    public function edit($post)
    {
        return "Aquí se mostrará el formulario para editar el post: $post";
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