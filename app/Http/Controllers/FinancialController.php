<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;


class FinancialController extends Controller
{
    public function index(){
        return view('financial_panel.home');
    }

    public function reg_clin_page(){
        return view('financial_panel.registrarClinica');
    }

    public function registerClinic(Request $request){
        $userC = new UserController();
        $userC->register($request);
        return redirect()->route('financial');
    }

    public function gerenciarClinicaPage(){
        $clinicas = User::where("role", 'clinic')->get();
        return view('financial_panel.gerenciarClinica', ['clinics' => $clinicas]);
    }
}
