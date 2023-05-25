<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedurefile;

class ManagerController extends Controller
{
    public function upload_procedure()
    {
        return view('manager.uploadprocedure');
    }
    public function upload(Request $request)
    {
        $procedure= new procedurefiles;
        $procedure->nom_procedure = $request->name;
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('procedure',$filename);
        $procedure->file=$filename;
        $procedure->service_id=$request->service;
        $procedure->save();

        
    }
   /* public function show()
    {
        $procedure= new procedurefile;
        $procedure= Procedurefiles::all();
        return view('manager.uploadprocedure',compact('procedure'));
    }*/
}
