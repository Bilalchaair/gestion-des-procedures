<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Service;
use App\Models\Hopital;
use App\Models\Division;
use App\Models\Unite;

class AdminController extends Controller
{
   //CRUD user
   public function showusers()
   {
    $user = User::all();
    return view('admin.users.home' , compact('user'));
   }
   public function adduser()
   {
    return view('admin.users.adduser');
   }
   public function add_user(Request $request)
   {
    $user=new user;
    $user->name=$request->name;
    $user->email=$request->email;
    $user->password = Hash::make($request->password);
    $user->usertype=$request->usertype;
    $user->save();
    return redirect('users');
   }
   public function delete_user($id)
   {
    $user = User::find($id);
    $user->delete();
    return redirect()->back();
   }
   public function update_user($id)
   {
    $user = User::find($id);
    return view('admin.users.edituser',compact('user'));
   }
   public function edit_user(Request $request,$id)
   {
    $data=user::find($id);
    $data->name=$request->name;
    $data->email=$request->email;
    $data->password = Hash::make($request->password);
    $data->usertype=$request->usertype;
    $data->save();
    return redirect('users');

   }
  
   //CRUD hopital
   public function showhopital()
   {
    $hopital = Hopital::all();
    return view('admin.hopital.home' , compact('hopital'));
   }
   public function addhopital()
   {
    return view('admin.hopital.addhopital');
   }
   public function add_hopital(Request $request)
   {
    $hopital=new hopital;
    $hopital->nom_hopital=$request->nom_hopital;
    $hopital->adresse=$request->adresse;
    $hopital->save();
    return redirect('hopital');
   }
   public function delete_hopital($id)
   {
    $hopital = Hopital::find($id);
    $hopital->delete();
    return redirect()->back();
   }
   public function update_hopital($id)
   {
    $hopital = Hopital::find($id);
    return view('admin.hopital.edithopital',compact('hopital'));
   }
   public function edit_hopital(Request $request,$id)
   {
    $hopital=Hopital::find($id);
    $hopital->nom_hopital=$request->nom_hopital;
    $hopital->adresse=$request->adresse;
    $hopital->save();
    return redirect('hopital');

   }
   //CRUD division
   public function showdivision()
   {
    $division = Division::all();
    return view('admin.division.home' , compact('division'));
   }
   public function adddivision()
   {
      $hopital = Hopital::all();
    return view('admin.division.adddivision',compact('hopital'));
   }
   public function add_division(Request $request)
   {
    $division=new division;
    $division->nom_division=$request->nom_division;
    $division->hopital_id=$request->hopital_id;
    $division->save();
    return redirect('division');
   }
   public function delete_division($id)
   {
    $division = Division::find($id);
    $division->delete();
    return redirect()->back();
   }
   public function update_division($id)
   {
    $division = Division::find($id);
    $hopital = Hopital::all();
    return view('admin.division.editdivision',compact('division','hopital'));
   }
   public function edit_division(Request $request,$id)
   {
    $division=Division::find($id);
    $division->nom_division=$request->nom_division;
    $division->hopital_id=$request->hopital_id;
    $division->save();
    return redirect('division');
   }
   //CRUD service
   public function showservice()
   {
    $service = Service::all();
    return view('admin.service.home' , compact('service'));
   }
   public function addservice()
   {
      $division = Division::all();
      $hopital = Hopital::all();
    return view('admin.service.addservice',compact('hopital','division'));
   }
   public function add_service(Request $request)
   {
    $service=new Service;
    $service->nom_service=$request->nom_service;
    $service->division_id=$request->division_id;
    $service->hopital_id=$request->hopital_id;
    $service->save();
    return redirect('service');
   }
   public function delete_service($id)
   {
    $service = service::find($id);
    $service->delete();
    return redirect()->back();
   }
   public function update_service($id)
   {
    $service = service::find($id);
    $hopital = Hopital::all();
    $division = Division::all();
    return view('admin.service.editservice',compact('service','hopital','division'));
   }
   public function edit_service(Request $request,$id)
   {
    $service=service::find($id);
    $service->nom_service=$request->nom_service;
    $service->division_id=$request->division_id;
    $service->hopital_id=$request->hopital_id;
    $service->save();
    return redirect('service');
   }
//CRUD unite
public function showunite()
{
 $unite = unite::all();
 return view('admin.unite.home' , compact('unite'));
}
public function addunite()
{
   $service = service::all();
 return view('admin.unite.addunite',compact('service'));
}
public function add_unite(Request $request)
{
 $unite=new unite;
 $unite->nom_unite=$request->nom_unite;
 $unite->service_id=$request->service_id;
 $unite->save();
 return redirect('unite');
}
public function delete_unite($id)
{
 $unite = unite::find($id);
 $unite->delete();
 return redirect()->back();
}
public function update_unite($id)
{
 $unite = unite::find($id);
 $service = service::all();
 return view('admin.unite.editunite',compact('unite','service'));
}
public function edit_unite(Request $request,$id)
{
 $unite=unite::find($id);
 $unite->nom_unite=$request->nom_unite;
 $unite->service_id=$request->service_id;
 $unite->save();
 return redirect('unite');
}

   
}
