<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Rutas de proveedor
Route::post('/proveedor/update/{id}', [ProveedorController::class, 'update'])->name('proveedor.update');
Route::get('/proveedor/index', [ProveedorController::class, 'index'])->name('proveedor.index');
Route::get('/proveedor/create', [ProveedorController::class,'create'])->name('proveedor.create');
Route::post('/proveedor/store', [ProveedorController::class,'store'])->name('proveedor.store');
Route::post('/proveedor/delete/{id}', [ProveedorController::class, 'delete'])->name('proveedor.delete');
Route::get('/proveedor/edit/{id}', [ProveedorController::class, 'edit'])->name('proveedor.edit');

//Rutas de cliente
Route::post('/cliente/update/{id}', [ClienteController::class, 'update'])->name('cliente.update');
Route::get('/cliente/index', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cliente/create', [ClienteController::class,'create'])->name('cliente.create');
Route::post('/cliente/store', [ClienteController::class,'store'])->name('cliente.store');
Route::post('/cliente/delete/{id}', [ClienteController::class, 'delete'])->name('cliente.delete');
Route::get('/cliente/edit/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');

//Rutas de Compra
Route::post('/compra/update/{id}', [CompraController::class, 'update'])->name('compra.update');
Route::get('/compra/index', [CompraController::class, 'index'])->name('compra.index');
Route::get('/compra/create', [CompraController::class,'create'])->name('compra.create');
Route::post('/compra/store', [CompraController::class,'store'])->name('comprar.store');
Route::post('/compra/delete/{id}', [CompraController::class, 'delete'])->name('comprar.delete');
Route::get('/compra/edit/{id}', [CompraController::class, 'edit'])->name('comprar.edit');


//Route::post('categoria', [CategoriaController::class, 'store'])->name('categoria.store');
Route::resource('categoria', CategoriaController::class);
Route::post('/categoria/update/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
//Route::post('/categoria/{id}', [CategoriaController::class, 'delete'])->name('categoria.delete');
Route::resource('laboratorio', LaboratorioController::class);
Route::post('/laboratorio/update/{id}', [LaboratorioController::class, 'update'])->name('laboratorio.update');
Route::resource('producto', ProductoController::class);
Route::post('/producto/update/{id}', [ProductoController::class, 'update'])->name('producto.update');
Route::resource('venta', VentaController::class);
Route::post('/venta/update/{id}', [VentaController::class, 'update'])->name('venta.update');