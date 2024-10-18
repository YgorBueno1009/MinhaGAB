<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function registerPage()
    {
        return view('pages.register');
    }

    public function loginPage(){
        return view('pages.login');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'cpf_cnpj' => 'required|string',
            'password' => 'required|string',
            'role'  => 'required|string'
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['name'].'155151515',
            'cpf_cnpj' => $data['cpf_cnpj'],
            'password' => bcrypt($data['password']),
            'role' => $data['role'],
        ]);

        return redirect()->back();
    }

    public function login(Request $request){
        $data = $request->validate([
            'cpf_cnpj' => 'required|string',
            'password' => 'required|string',
            'role' => 'required'
        ]);

        $user = User::where('cpf_cnpj', $data['cpf_cnpj'])->first();
        if(!$user || !Hash::check($data['password'], $user['password'])){
            return redirect()->back()->with('error','CPF ou senha inválidos');
        }

        if($data['role'] != 'financial'){
            return response()->redirectTo('/');
        }else{
            Auth::login($user);
            return redirect()->route('financial');
        }
    }

    public function logout(){
        Session::flush();

        Auth::logout();

        return redirect()->route('login-page');
    }
}
