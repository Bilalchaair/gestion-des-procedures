<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedurefile;
use App\Models\Hopital;
use App\Models\Division;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;


class externeController extends Controller
{
    public function page_procedure()
    {
       // $procedurefiles10= Procedurefiles::where('service_id', 10)->get();
        //return view('procedure',compact('procedurefiles10'));
        $hopitals = Hopital::all();
        $divisions = Division::all();
        $services = Service::all();
        $procedurefiles = procedurefile::all();

        return view('procedure', compact('hopitals','divisions','services','procedurefiles'));
    }
    public function download(Request $request,$file)
   {
        return response()->download(public_path('procedure/'.$file));
   }
   public function view($id)
   {
   	$procedurefiles10=Procedurefiles::find($id);

   	return view('viewprocedure',compact('procedurefiles10'));


   }
}
