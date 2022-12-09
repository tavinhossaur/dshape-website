<?php

use App\Http\Controllers\MeasurementsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashBoardController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/home', function () {
//     return view('measurements/landing');
// });

// Route::get('/', function () {
//     return view('measurements/landing');
// });

//Rotas públicas
Route::get('/', function () {
    return view('measurements/landing');
});

Route::get('/login', function () {
    return view('measurements/login');
})->name('login');

Route::post('/auth', [LoginController::class,'auth']);
Route::get('/logout', [LoginController::class,'logout']);

Route::get('/register', function () {
    return view('measurements/registrar');
});

// Rotas privadas
Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/measurements/home', [DashBoardController::class,'index']);

    Route::get('/measurements/list', [MeasurementsController::class,'index']);

    Route::get('/measurements/new', function () {
        return view('measurements/form');
    });

    // Rota que salva no banco de dados uma nova medida
    Route::post('/measurements/new', [MeasurementsController::class, 'store']);

    // Rota que exclui uma medida no bando de dados
    Route::delete('/measurements/{id}', [MeasurementsController::class, 'destroy']);

    // Rota que altera uma medida no banco de dados
    Route::put('/measurements/{id}', [MeasurementsController::class, 'update']);

    // Rota que retorna uma medida específica
    Route::get('/measurements/edit/{id}', [MeasurementsController::class, 'show']);
});