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

    public function getGabs($id){
        $request = GabsRequest::where('id', $id)->first();
        $gabs = Gab::where('request_id', $id)->get();
        $patient = User::where('id', $request['patient_id'])->first();
        return view('financial_panel.gerenciarGABS', [
            'gabs' => $gabs,
            'request' => $request,
            'patient' => $patient
        ]);
    }

    public function registerGabPage($id){
        $gab = Gab::where('id', $id)->first();
        return view('financial_panel.cadastrarGAB', [
            'gab'=>$gab
        ]);
    }

    public function registerGab(Request $request, $id){
        try {
            $data = $request->validate([
                'message'    => 'string',
                'pdf'        => 'required|mimes:pdf',
            ]);
    
            if ($request->hasFile('pdf')) {
                $pdfFile = $request->file('pdf');
                $pdfContent = file_get_contents($pdfFile);
                $status = "emitida";

                if(!$pdfContent || $pdfContent == ""){
                    $status = "pendente";
                }
    
                $gab = Gab::where('id', $id)->update([
                    'path'       => $pdfContent,
                    'status'     => 'emitida'
                ]);
    
                if ($gab) {
                    return redirect()->route('gerenciar-requisicao');
                }
            }
        } catch (\Illuminate\Database\QueryException $e) {
            // Exibe o erro SQL para debug
            dd($e->getMessage());
        }
    }

    public function negarGab(Request $request, $id){
        $data = $request->validate([
            'message'    => 'required|string',
        ]);

        $gab = Gab::where('id', $id)->update([
            'status'     => 'negada',
            'message' => $data['message']
        ]);

        if($gab){
            return redirect()->route('gerenciar-requisicao');
        }
    }

    public function clinicPage(){
        $requests = GabsRequest::where('clinic_id', auth()->user()->id)->get();
        $gabs = Gab::all()->groupBy('request_id');
        $clinics = User::all()->keyBy('id');
    
        return view('', [
            'gabs' => $gabs,
            'clinics' => $clinics,
            'requests' => $requests
        ]);
    }
}
