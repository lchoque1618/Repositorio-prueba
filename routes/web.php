<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
   return view('welcome');
//        return "bienvenidos";
});

route::controller(CursoController::class)->group (function (){

        Route::get('curso', 'index');

        Route::get('curso/crear', 'crear');
        
        Route::get('curso/{curso}', 'show');

});
*/


//Route::get('producto', [ProductoController::class, 'index']);

//Route::get('producto/crear', [ProductoController::class, 'crear']);

//Route::get('producto/{variable}', [ProductoController::class, 'show']);

route::controller(ProductoController::class)->group (function (){

        Route::get('producto', 'index');

        Route::get('producto/crear', 'crear');
        
        Route::get('producto/{producto}', 'show');

});







    /* http://localhost/Miproyecto/public/producto/pan/arroz */
/*
   Route::get('producto/{variable1}/{variable2?}', function ($variable1, $variable2=null) {
        if ($variable2){
                return "el producto e1 es $variable1 y variable 2 es $variable2";      
        } else {
        return "El producto nro 1 es: $variable1";
        }
});
*/