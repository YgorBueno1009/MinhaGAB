<?php

use App\Http\Controllers\ClinicController;
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
    return view("index");
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


// Requisições
Route::get('/registrar-requisicao', [FinancialController::class, 'registerReqPage'])->name("registrar-requisicao");
Route::post('/registrar-requisicao', [FinancialController::class, 'registerReq'])->name("cadastrar-requisicao");


Route::get('/registrar-clinica', [FinancialController::class, "reg_clin_page"])->name("registrar-clinica");
Route::post('/casdastrar-clinica', [FinancialController::class, "registerClinic"])->name("cadastrar-clinica");

Route::get('/gerenciar-clinica', [FinancialController::class, 'gerenciarClinicaPage'])->name("gerenciar-clinica");

Route::get("/comments", [FinancialController::class, 'res_com_page'])->name("comentarios");
Route::get("/res-comment/{id}", [FinancialController::class, 'res_com'])->name("responder");
Route::post("/registar-resposta/{id}", [FinancialController::class, 'responder'])->name("responderr");

// Patient

Route::get('/patient', [FinancialController::class, 'patientPage'])->name("patient-page");
Route::get('/download_pdf/{id}', [FinancialController::class, 'download'])->name("download");


Route::get('/gerenciar-requisicao', [ClinicController::class, 'renderPanel'])->name("gerenciar-requisicao");
Route::get('/gerenciar-requisicao/{id}', [ClinicController::class, 'getGabs'])->name("gerenciar-unica-req");


Route::get('/registrar-gab/{id}', [ClinicController::class, 'registerGabPage'])->name("registrar-gab");
Route::post('/negar-gab/{id}', [ClinicController::class, 'negarGab'])->name("negar-gab");
Route::post('/registrar-gab/{id}', [ClinicController::class, 'registerGab'])->name("cadastrar-gab");

// Clinica
Route::get('/clinic', [ClinicController::class, 'clinicPage'])->name("clinic-page");
