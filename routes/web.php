<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rutasController;
use App\Http\Controllers\productosController;




//rutas
Route::get('/index', [rutasController::class, 'showindex']);
Route::get('/', [rutasController::class, 'showindex']);
// Route::get('/listarProducto', [rutasController::class, 'showlistarproducto']);
// Route::get('/bodega/{sucursal?}/{direccion?}', [rutasController::class, 'showbodega']);
// Route::get('/ingresaP', [rutasController::class, 'showIngresaP']);
// Route::get('/eliminaP', [rutasController::class, 'showeliminaP']);
// Route::post('agregaP', [
//     'uses' => 'App\Http\Controllers\productosController@agregarProducto',
//     'as' => 'agregarPro'
// ]);
// route::resource();


// Route::get('/bodega/{sucursal?}/{direccion?}', function($sucursal="Mi Bodega", $direccion="Stgo Centro"){
//     return view('bodega')
//     ->with('sucursal',$sucursal);
// });
