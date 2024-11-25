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
}
