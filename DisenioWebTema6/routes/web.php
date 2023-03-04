<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Rutas hechas declarandose aqui

/*Route::get('/productoCreate', function () {
    return view('producto.create');
});

Route::get('/productoEdit', function () {
    return view('producto.edit');
});

Route::get('/productoIndex', function () {
    return view('producto.index');
});*/

//Rutas hechas utilizando el controlador de recursos del controlador de producto
Route::get('/productoCreate',[ProductoController::class,'create']);
Route::get('/productoEdit',[ProductoController::class,'edit']);
Route::get('/productoIndex',[ProductoController::class,'index']);