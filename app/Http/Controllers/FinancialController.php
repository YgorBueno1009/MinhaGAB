<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Comment;
use App\Models\Gab;
use App\Models\GabsRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FinancialController extends Controller
{
    public function index(){
        return;
    }

    public function res_com_page(){
        $comments = Comment::all();
        return view('financial_panel.resComments', ['comments'=>$comments]);
    }

    public function res_com($id){
        $comment = Comment::find($id);
        return view('financial_panel.commentSingle', ['comment'=>$comment, 'id'=>$id]);
        dd($comment);
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

    public function responder(Request $request, $id){
        $comment = Comment::find($id);

        $data = $request->validate([
            'answer' => 'required|string'
        ]);

        Answer::create([
            'comment_id' => $comment['id'],
            'answer' => $data['answer']
        ]);

        $comment->update(['status'=>'respondido']);

        return redirect()->route('comentarios');
    }

    public function registerGabPage(){
        $clinicsList = User::where('role', 'clinic')->get();
        $patientsLists = User::where('role', 'patient')->get();

        return view('financial_panel.registrarGAB', [
            'clinics'  => $clinicsList,
            'patients' => $patientsLists
        ]);
    }

    public function registerGab(Request $request)
    {
        try {
            $data = $request->validate([
                'clinic_id'  => 'required|numeric',
                'patient_id' => 'required|numeric',
                'pdf'        => 'required|mimes:pdf',
            ]);
    
            if ($request->hasFile('pdf')) {
                $pdfFile = $request->file('pdf');
                $pdfContent = file_get_contents($pdfFile);
                $status = "emitida";

                if(!$pdfContent || $pdfContent == ""){
                    $status = "pendente";
                }
    
                $gab = Gab::create([
                    'clinic_id'  => $data['clinic_id'],
                    'patient_id' => $data['patient_id'],
                    'path'       => $pdfContent,
                    'status'     => $status
                ]);
    
                if ($gab) {
                    return redirect()->route('gerenciar-gab');
                }
            }
        } catch (\Illuminate\Database\QueryException $e) {
            // Exibe o erro SQL para debug
            dd($e->getMessage());
        }   
    }

    public function download($id)
    {
        $gab = Gab::findOrFail($id);

        return response($gab->path)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="document.pdf"');
    }

    public function gerenciarGabPage(){
        $gabs = Gab::get();
        $patient = User::all();

        return view('financial_panel.gerenciarGAB', [
            'gabs' => $gabs,
            'patient' => $patient
        ]);
    }

    public function patientPage(){
        $requests = GabsRequest::where('patient_id', auth()->user()->id)->get();
        $gabs = Gab::all()->groupBy('request_id');
        $clinics = User::all()->keyBy('id');
    
        return view('patient_panel.index', [
            'gabs' => $gabs,
            'clinics' => $clinics,
            'requests' => $requests
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
