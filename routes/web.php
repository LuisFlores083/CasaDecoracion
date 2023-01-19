<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DatosProductos;

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

/*Route::get('productos', function () {
    return view ('product');
})->name('product');

Route::get('blog', function () {
    return view ('blog');
})->name('blog');

Route::get('nosotros', function () {
    return view ('about');
})->name('about');

Route:: view ('welcome', 'welcome');


Route::get('/{nombre?}', function ($nombre = null) {
    return view ('index')->with('name', $nombre);
});

Route::get('cursos/{nombre}/{version}', function ($nombre, $version= null) {
    if($version)
        return 'Ingresaste al curso: '. $nombre.'version'. $version;
    else
    return 'Ingresaste al curso: '. $nombre;
}) -> where (['nombre'=>'[A-Za-z]+', 'version'=>'[0-9]+']);

*/

/*Route::get('productos', ProductsController::class)
->name('product');*/

Route::get('productos', [ProductsController::class, 'index'])->name('product');

Route::get('productos/crear', [ProductsController::class, 'create']);

Route::get('productos/{categoria}', [ProductsController::class, 'show'])
->where(['categoria'=>'[A-Za-zñÑ.\'\s]+'])->name('mostrarProductos');

Route::get('producto/{modelo}', [DatosProductos::class, 'show'])
->where(['modelo'=>'[1-9]+'])->name('mostrarDatos');

Route::get('nosotros', WelcomeController::class)
->name('about');

Route::get('blog',BlogController::class)
->name('blog');

Route::view('welcome','welcome');

Route::get('/{nombre?}', HomeController::class);

