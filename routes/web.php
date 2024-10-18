<?php

use App\Http\Controllers\FinancialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return "<h1>Funcionou</h1>";
});

Route::get('/register', [UserController::class, 'registerPage'])->name('register-page');
Route::post('/register-user', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'loginPage'])->name('login-page');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/do-login', [UserController::class, 'login'])->name('login');

Route::get('/financial', [FinancialController::class, 'index']);

// Financial

Route::get('/financial', function () {
    return view('financial_panel.home');
})->name('financial');

Route::get('/registrar-gab', function () {
    return view('financial_panel.registrarGAB');
})->name("registrar-gab");

Route::get('/gerenciar-gab', function () {
    return view('financial_panel.gerenciarGAB');
})->name("gerenciar-gab");

Route::get('/registrar-clinica', [FinancialController::class, "reg_clin_page"])->name("registrar-clinica");
Route::post('/casdastrar-clinica', [FinancialController::class, "registerClinic"])->name("cadastrar-clinica");

Route::get('/gerenciar-clinica', function () {
    return view('financial_panel.gerenciarClinica');
})->name("gerenciar-clinica");

Route::get("/comments", [FinancialController::class, 'res_com_page'])->name("comentarios");
Route::get("/res-comment/{id}", [FinancialController::class, 'res_com'])->name("responder");
Route::post("/registar-resposta/{id}", [FinancialController::class, 'responder'])->name("responderr");
