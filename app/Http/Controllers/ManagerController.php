<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedurefile;
use App\Models\Service;

use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller
{
    public function upload_procedure()
    {
        if (Auth::check()) {
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'manager') {
        $procedure = procedurefile::paginate(5);
        $service = Service::all();
        $serviceId ='';
        return view('manager.procedure',compact('procedure','service','serviceId'));}
        } else {
        return view('welcome');
        }
    }
    public function uploadprocedure()
    {
        if (Auth::check()) {
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'manager') {
            $service = service::all();
            return view('manager.uploadprocedure',compact('service'));}
        } else {
        return view('welcome');
        }
    }
    public function upload(Request $request)
    {
        if (Auth::check()) {
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'manager') {
        $procedure= new Procedurefile;
        $procedure->nom_procedure = $request->nom_procedure;
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('procedure',$filename);
        $procedure->file=$filename;
        $procedure->service_id=$request->service_id;
        $procedure->save();
        return redirect('upload_procedure')->with('success','Procédure Publiée');}
        } else {
        return view('welcome');
        }
    }
    public function delete_procedure($id)
    {
        if (Auth::check()) {
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'manager') {
            $procedure = Procedurefile::find($id);
            $procedure->delete();
            return redirect()->back()->with('error','Procédure supprimée');}
        } else {
        return view('welcome');
        }
    }
    public function update_procedure($id)
    {
        if (Auth::check()) {
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'manager') {
            $procedure = procedurefile::find($id);
            $service = service::all();
            return view('manager.editprocedure',compact('procedure','service'));}
        } else {
        return view('welcome');
        }
    }
    public function edit_procedure(Request $request,$id)
    {
        if (Auth::check()) {
            
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'manager') {
                if($request->file == null){ $procedure= procedurefile::find($id);
                    $procedure->nom_procedure=$request->nom_procedure;
                    $procedure->service_id=$request->service_id;
                    $procedure->save();
                    return redirect('upload_procedure')->with('success','Procédure modifiée');}else{
            $procedure= procedurefile::find($id);
            $procedure->nom_procedure=$request->nom_procedure;
            $file=$request->file;
                $filename=time().'.'.$file->getClientOriginalExtension();
                $request->file->move('procedure',$filename);
                $procedure->file=$filename;
            $procedure->service_id=$request->service_id;
            $procedure->save();
            return redirect('upload_procedure')->with('success','Procédure modifiée');}}
        } else {
        return view('welcome');
        }
    }
    public function filterProcedurefile(Request $request)
{
    $serviceId = $request->input('serviceId','');
    
    $name = $request->input('name','');

    $query = Procedurefile::query();

    // Apply service filter if selected
    if ($serviceId) {
        $query->where('service_id', $serviceId);
    }

    // Apply sorting order if selected
  

    // Apply sorting by name if selected
    if ($name) {
        $query->where('nom_procedure', 'LIKE', "$name%");
    }

    $procedure = $query->paginate(5);
    
    $service = Service::all();

    return view('manager.procedure', compact('procedure', 'service','serviceId'));
}
   /* public function show()
    {
        $procedure= new procedurefile;
        $procedure= Procedurefiles::all();
        return view('manager.uploadprocedure',compact('procedure'));
    }*/
}
