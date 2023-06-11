<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedurefile;
use App\Models\Hopital;
use App\Models\Division;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class ExterneController extends Controller
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
            $procedurefiles10=Procedurefile::find($id);

            return view('viewprocedure',compact('procedurefiles10'));}
        } else {
            return view('welcome');
        }


   }
   public function getDivisions($hospitalId)
   {
    if($hospitalId =='all' ){
        $divisions = Division::all();
    
        $options = '<option value="all">All Divisions</option>';
        foreach ($divisions as $division) {
            $options .= '<option value="' . $division->id . '">' . $division->nom_division . '</option>';
        }
        return $options;
    }else{
       $hopital = Hopital::findOrFail($hospitalId);
       $divisions = $hopital->divisions;

       $options = '<option value="">Choissisez Division</option>';
       foreach ($divisions as $division) {
           $options .= '<option value="' . $division->id . '">' . $division->nom_division . '</option>';
       }

       return $options;
    }
   }

   public function getServices($divisionId)
   { if($divisionId =='all' ){
    $services = Service::all();
    $options = '<option value="">Choisissez Service</option>';
    $options = '<option value="all">All Services</option>';
    foreach ($services as $service) {
        $options .= '<option value="' . $service->id . '">' . $service->nom_service . '</option>';
    }
    return $options;
}else{
       $division = Division::findOrFail($divisionId);
       $services = $division->services;

       $options = '<option value="">Choisissez Service</option>';
       foreach ($services as $service) {
           $options .= '<option value="' . $service->id . '">' . $service->nom_service . '</option>';
       }

       return $options;
    }
   }

   public function getProcedureFiles(Request $request)
   {
       $hospitalId = $request->input('hospitalId');
       $divisionId = $request->input('divisionId');
       $serviceId = $request->input('serviceId');
   
       $procedurefiles = ProcedureFile::query();
   


    if ($serviceId) {
        $procedurefiles->where('service_id', $serviceId);
    }

       $procedurefiles = $procedurefiles->get();
   
       $html = '';
       foreach ($procedurefiles as $procedurefile) {
           $html .= '<div class="data-item">
           <a href="#">
               <img src="externe/pdfimg.png" alt="Image">
           </a>
           <div class="data-name">' . $procedurefile->nom_procedure . '</div>
           <a type="button" class="btn btn-info" href="' . url("procedure/{$procedurefile->file}") . '" download>Télécharger PDF</a>
        </div>';
       }
   
       return $html;
   }
}
