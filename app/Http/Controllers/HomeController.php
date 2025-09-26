<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
  /*  public function index()
    {
        return "Hola desde la página inicial";
    } */
    public function __invoke()
    {
        return view('welcome');
    }

    
}
