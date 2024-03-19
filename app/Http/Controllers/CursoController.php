<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
        // Metodo index
        public function index(){
            return view('Cursos.index');
        }
    
        // metodo para crear
        public function crear(){
            return view('Cursos.crear');
        }
    
            // metodo para crear variable
        public function show($curso){
            return view('Cursos.show', ['curso'=>$curso]);
        }
    
}
