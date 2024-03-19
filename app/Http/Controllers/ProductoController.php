<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Metodo index
    public function index(){
        return view('Productos.index');
    }

    // metodo para crear
    public function crear(){
        return view('Productos.crear');
    }

        // metodo para crear variable
    public function show($producto){
        return view('productos.show', ['producto'=>$producto]);
    }
}
