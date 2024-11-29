<?php

namespace App\Http\Controllers;

use App\Models\Gab;
use App\Models\GabsRequest;
use App\Models\User;
use Illuminate\Auth\RequestGuard;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ClinicController extends Controller
{    
    public function clinicPage(){
        $requests = GabsRequest::where('clinic_id', auth()->user()->id)->get();
        $gabs = Gab::all()->groupBy('request_id');
        $clinics = User::all()->keyBy('id');
    
        return view('clinic_panel.index', [
            'gabs' => $gabs,
            'clinics' => $clinics,
            'requests' => $requests
        ]);
    }

    public function clinicPageSearcher(Request $request){
        $data = $request->validate([
            'query' => 'string'
        ]);
        $name = $request['query'];
        $patient_id = User::where("name", 'LIKE', "%{$name}%")->orWhere("cpf_cnpj", 'LIKE', "%{$name}%")->first();
        $requests = GabsRequest::where('clinic_id', auth()->user()->id)->where('patient_id','LIKE', "%{$patient_id->id}%")->get();
        $gabs = Gab::all()->groupBy('request_id');
        $clinics = User::all()->keyBy('id');
    
        return view('clinic_panel.search', [
            'gabs' => $gabs,
            'clinics' => $clinics,
            'requests' => $requests
        ]); 
    }
}   
