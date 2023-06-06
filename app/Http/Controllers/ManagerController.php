<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedurefiles;

class ManagerController extends Controller
{
    public function upload_procedure()
    {
        return view('manager.uploadprocedure');
    }
    public function upload(Request $request)
    {
        $procedure= new Procedurefiles;
        $procedure->nom_procedure = $request->name;
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('procedure',$filename);
        $procedure->file=$filename;
        $procedure->service_id=$request->service;
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
