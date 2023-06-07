<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedure;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

use function PHPUnit\Framework\isNull;

class InterneController extends Controller
{
    public function showprocedure()
   {
    if (Auth::check()) {
        $usertype = Auth()->user()->usertype;
        if ($usertype == 'user1') {
        $procedure = Procedure::paginate(1);
        return view('interne.procedure.home',compact('procedure'));}
    } else {
        return view('welcome');
    }
   }
   public function addprocedure()
   {
    if (Auth::check()) {
        $usertype = Auth()->user()->usertype;
        if ($usertype == 'user1') {
        return view('interne.procedure.addprocedure');}
    } else {
        return view('welcome');
    }
   }
   public function verifierprocedure($id)
   {
    if (Auth::check()) {
        $usertype = Auth()->user()->usertype;
        if ($usertype == 'user1') {
       $procedure = Procedure::find($id);
       return view('interne.procedure.verifierprocedure', compact('procedure'));
    }
    } else {
        return view('welcome');
    }
   }
   public function ajouter_verif(Request $request,$id)
   {
    if (Auth::check()) {
        $usertype = Auth()->user()->usertype;
        if ($usertype == 'user1') {
        $data=procedure::find($id);
        $request->validate([
            'nom_ver' => ['required','regex:/^[a-zA-Z]+$/u' , 'string', 'max:255'],
    
        ]);
        $data->nom_ver=$request->nom_ver;
        $data->fonction_ver=$request->fonction_ver;
        $data->date_verification=$request->date_verification;
        
        $data->save();
        return redirect('showprocedure')->with('success','Procédure vérifiée');
    }
    } else {
        return view('welcome');
    }

   }
   public function delete_proc($id)
   {
    if (Auth::check()) {
        $usertype = Auth()->user()->usertype;
        if ($usertype == 'user1') {
    $procedure = Procedure::find($id);
    $procedure->delete();
    return redirect()->back();}
    } else {
        return view('welcome');
    }
   }
 
   public function approuverprocedure($id){
    if (Auth::check()) {
        $usertype = Auth()->user()->usertype;
        if ($usertype == 'user1') {
    $procedure = Procedure::find($id);
    if(is_null($procedure->nom_ver) && is_null($procedure->fonction_ver))
         return redirect()->back()->with('error','Cette procédure n\'est pas vérifiée');
   else
    return view('interne.procedure.approuverprocedure', compact('procedure'));}
    } else {
        return view('welcome');
    }
   }
   public function ajouter_app(Request $request,$id)
   {
    if (Auth::check()) {
        $usertype = Auth()->user()->usertype;
        if ($usertype == 'user1') {
        $data=procedure::find($id);
        $request->validate([
            'nom_app' => ['required','regex:/^[a-zA-Z]+$/u' , 'string', 'max:255'],
    
        ]);
        $data->nom_app=$request->nom_app;
        $data->fonction_app=$request->fonction_app;
        $data->date_approvation=$request->date_approvation;
        
        $data->save();
        return redirect('showprocedure')->with('success','Procédure approuvée');}
    } else {
        return view('welcome');
    }

   }
   public function modifierprocedure($id)
   {
    if (Auth::check()) {
        $usertype = Auth()->user()->usertype;
        if ($usertype == 'user1') {
    $procedure = Procedure::find($id);
    $service = Service::all();
    return view('interne.procedure.modifierprocedure', compact('procedure','service'));}
    } else {
        return view('welcome');
    }
   }
   public function modifier_proc(Request $request,$id)
   {
    if (Auth::check()) {
        $usertype = Auth()->user()->usertype;
        if ($usertype == 'user1') {
    $data=Procedure::find($id);
    if(is_null($request->logigramme)){
    $data->nom_redacteur=$request->nom_redacteur;
    $data->fonction_redacteur=$request->fonction_redacteur;
    $data->service_id=$request->service_id;
    $data->nom_proc=$request->nom_proc;
    $data->reference_code=$request->reference_code;
    $data->date_creation=$request->date_creation;
    $data->objet=$request->objet;
    $data->domaineapp=$request->domaineapp;
    $data->references=$request->references;
    $data->abreviation=$request->abreviation;
    $data->description=$request->description;
    $data->enregistrement=$request->enregistrement;
    $data->enregistrement_code=$request->enregistrement_code;
    $data->save();
    return redirect('showprocedure')->with('success','Procédure modifiée');
    }else {
        $logi_name = $request->logigramme->getClientOriginalName();
        $upload_logi = $request->logigramme->storeAs('Logigrammes', $logi_name);
        if($upload_logi){
    $data->nom_redacteur=$request->nom_redacteur;
    $data->fonction_redacteur=$request->fonction_redacteur;
    $data->service_id=$request->service_id;
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
    $data->enregistrement_code=$request->enregistrement_code;
    $data->save();
    return redirect('showprocedure')->with('success','Procédure modifiée');
}
    }}
    } else {
        return view('welcome');
    }

   }
   public function exporterprocedure($id){
    if (Auth::check()) {
        $usertype = Auth()->user()->usertype;
        if ($usertype == 'user1') {
    $procedure=Procedure::find($id);
    $pdf = PDF::loadView('interne.pdf.procedure', ['procedure' => $procedure]);
    return $pdf->download('procedure.pdf');}
    } else {
        return view('welcome');
    }
   }
   
}