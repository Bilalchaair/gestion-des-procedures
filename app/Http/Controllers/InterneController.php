<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedure;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

use function PHPUnit\Framework\isNull;

class InterneController extends Controller
{
    public function showprocedure()
   {
    $procedure = Procedure::orderBy('created_at', 'DESC')->get();
    return view('interne.procedure.home',compact('procedure'));
   }
   public function addprocedure()
   {
    
    return view('interne.procedure.addprocedure');
   }
   public function verifierprocedure($id)
   {
       $procedure = Procedure::find($id);

       return view('interne.procedure.verifierprocedure', compact('procedure'));
   }
   public function ajouter_verif(Request $request,$id)
   {
    $data=procedure::find($id);
    $data->nom_ver=$request->nom_ver;
    $data->fonction_ver=$request->fonction_ver;
    $data->date_verification=$request->date_verification;
    
    $data->save();
    return redirect('showprocedure')->with('success','Procédure vérifiée');

   }
   public function delete_proc($id)
   {
    $procedure = Procedure::find($id);
    $procedure->delete();
    return redirect()->back();
   }
 
   public function approuverprocedure($id){
   
    $procedure = Procedure::find($id);
    if(is_null($procedure->nom_ver) && is_null($procedure->fonction_ver))
         return redirect()->back()->with('error','Cette procédure n\'est pas vérifiée');
   else
    return view('interne.procedure.approuverprocedure', compact('procedure'));
   }
   public function ajouter_app(Request $request,$id)
   {
    $data=procedure::find($id);
    $data->nom_app=$request->nom_app;
    $data->fonction_app=$request->fonction_app;
    $data->date_approvation=$request->date_approvation;
    
    $data->save();
    return redirect('showprocedure')->with('success','Procédure approuvée');

   }
   public function modifierprocedure($id)
   {
    $procedure = Procedure::find($id);
    return view('interne.procedure.modifierprocedure', compact('procedure'));
   }
   public function modifier_proc(Request $request,$id)
   {
   
    $data=Procedure::find($id);
    if(is_null($request->logigramme)){
    $data->nom_redacteur=$request->nom_redacteur;
    $data->fonction_redacteur=$request->fonction_redacteur;
    $data->nom_proc=$request->nom_proc;
    $data->reference_code=$request->reference_code;
    $data->date_creation=$request->date_creation;
    $data->objet=$request->objet;
    $data->domaineapp=$request->domaineapp;
    $data->references=$request->references;
    $data->abreviation=$request->abreviation;
    $data->description=$request->description;
    $data->enregistrement=$request->enregistrement;
    $data->save();
    return redirect('showprocedure')->with('success','Procédure modifiée');
    }else {
        $logi_name = $request->logigramme->getClientOriginalName();
        $upload_logi = $request->logigramme->storeAs('Logigrammes', $logi_name);
        if($upload_logi){
    $data->nom_redacteur=$request->nom_redacteur;
    $data->fonction_redacteur=$request->fonction_redacteur;
    $data->nom_proc=$request->nom_proc;
    $data->reference_code=$request->reference_code;
    $data->date_creation=$request->date_creation;
    $data->objet=$request->objet;
    $data->domaineapp=$request->domaineapp;
    $data->references=$request->references;
    $data->abreviation=$request->abreviation;
    $data->description=$request->description;
    $data->logigramme=$logi_name;
    $data->enregistrement=$request->enregistrement;
    $data->save();
    return redirect('showprocedure')->with('success','Procédure modifiée');
}
    }

   }
   public function exporterprocedure($id){
    $procedure=Procedure::find($id);
    $pdf = PDF::loadView('interne.pdf.procedure', ['procedure' => $procedure]);
    return $pdf->download('procedure.pdf');
   }
}