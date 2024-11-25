<?php

namespace App\Http\Controllers;

use App\Models\Gab;
use App\Models\GabsRequest;
use App\Models\User;
use Illuminate\Http\Request;

class GabRequestController extends Controller
{
    public function renderPanel() {
        $requests = GabsRequest::all();
        $patients = User::where('role', 'patient')->get()->keyBy('id');
        $clinics = User::where('role', 'clinic')->get()->keyBy('id');   
    
        return view('financial_panel.gerenciarRequisicoes', [
            'requests' => $requests,
            'patients' => $patients,
            'clinics' => $clinics
        ]);
    }
    
    public function registerReqPage(){
        $clinicsList = User::where('role', 'clinic')->get();
        $patientsLists = User::where('role', 'patient')->get();

        return view('financial_panel.registrarRequisicao', [
            'clinics'  => $clinicsList,
            'patients' => $patientsLists
        ]);
    }

    public function registerReq(Request $request){
        $data = $request->validate([
            'clinic_id'   => 'required|numeric',
            'patient_id'  => 'required|numeric',
            'description' => 'required|string',
            'gab_quant'   => 'required|numeric',
        ]);

        
        $request = GabsRequest::create([
            'clinic_id'   => $data['clinic_id'],
            'patient_id'  => $data['patient_id'],
            'description' => $data['description'],
            'gab_quant'   => $data['gab_quant'],
        ]);

        for ($i = 0; $i < $data['gab_quant']; $i++) { 
            $gab = Gab::create([
                'request_id' => $request->id,
                'path' => null,
                'message'=> '',
                'status' => 'pendente'
            ]);
        }
        

        if($request){
            return redirect()->back();
        }
    }
}
