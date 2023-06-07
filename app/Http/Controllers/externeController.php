<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedurefile;
use App\Models\Hopital;
use App\Models\Division;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class externeController extends Controller
{
    public function page_procedure()
    {
        if (Auth::check()) {
            $usertype = Auth()->user()->usertype;
            
            if ($usertype == 'user') {
                $hopitals = Hopital::all();
                $divisions = Division::all();
                $services = Service::all();
                $procedurefiles = procedurefile::all();

                return view('procedure', compact('hopitals', 'divisions', 'services', 'procedurefiles'));
            }
        } else {
            return view('welcome');
        }
    }
    public function download(Request $request,$file)
   {
    if (Auth::check()) {
        $usertype = Auth()->user()->usertype;
        
        if ($usertype == 'user') {
        return response()->download(public_path('procedure/'.$file));}
    } else {
        return view('welcome');
    }
   }
   public function view($id)
   {
    if (Auth::check()) {
        $usertype = Auth()->user()->usertype;
        
        if ($usertype == 'user') {
            $procedurefiles10=Procedurefiles::find($id);

            return view('viewprocedure',compact('procedurefiles10'));}
        } else {
            return view('welcome');
        }


   }
}
