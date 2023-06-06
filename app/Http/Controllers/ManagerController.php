<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedurefile;
use App\Models\Service;

class ManagerController extends Controller
{
    public function upload_procedure()
    {
        $procedure = procedurefile::all();
        return view('manager.procedure',compact('procedure'));
    }
    public function uploadprocedure()
    {
    $service = service::all();
    return view('manager.uploadprocedure',compact('service'));
    }
    public function upload(Request $request)
    {
        $procedure= new Procedurefile;
        $procedure->nom_procedure = $request->name;
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('procedure',$filename);
        $procedure->file=$filename;
        $procedure->service_id=$request->service_id;
        $procedure->save();
        return redirect('upload_procedure');
    }
    public function delete_procedure($id)
    {
    $procedure = Procedurefile::find($id);
    $procedure->delete();
    return redirect()->back();
    }
    public function update_procedure($id)
    {
    $procedure = procedurefile::find($id);
    $service = service::all();
    return view('manager.editprocedure',compact('procedure','service'));
    }
    public function edit_procedure(Request $request,$id)
    {
        $procedure= procedurefile::find($id);
        $procedure->nom_procedure=$request->nom_procedure;
        $file=$request->file;
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('procedure',$filename);
            $procedure->file=$filename;
        $procedure->service_id=$request->service_id;
        $procedure->save();
        return redirect('upload_procedure');
    }
   /* public function show()
    {
        $procedure= new procedurefile;
        $procedure= Procedurefiles::all();
        return view('manager.uploadprocedure',compact('procedure'));
    }*/
}
