<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use \App\Http\Controllers\ContactanosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name("home");

// Si queremos modificar las url, en vez de hacerla una por una, podemos modificar, con el nombre de NAMES ( engloba a todas)
// PARAMETERS por si recogia parametros, pues se modifica con dicho parametros
// EXPLICACION MUY VISUAL; CON PHP ARTISAN ROUTE:LIST
//Route::resource("asignaturas",CursoController::class)->parameters(["asignaturas"=>"curso"])->names("cursos");

Route::resource("cursos",CursoController::class);
Route::view("nosotros","nosotros")->name("nosotros");
Route::get("contactanos", [ContactanosController::class, "index"])->name("contactanos.index");
Route::post("contactanos", [ContactanosController::class,"store"])->name("contactanos.store");
Route::get("prueba", function(){
    return "Has accedido correctamente a esta ruta";
    })->middleware("age");
Route::get("no-autorizado", function (){
    return "Usted no es mayor de edad";
});


// El interrogante es por si recibe o no la variable
//Route::get("cursos/{curos}/{categoria?}", function($curso,$categoria = null){}


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
