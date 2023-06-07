<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Service;
use App\Models\Hopital;
use App\Models\Division;
use App\Models\Unite;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   //CRUD user
   public function showusers()
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
            $user = User::all();
            return view('admin.users.home' , compact('user'));}
         } else {
             return view('welcome');
         }
   }
   public function adduser()
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
            return view('admin.users.adduser');}
         } else {
             return view('welcome');
         }
   }
   public function add_user(Request $request)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $user=new user;
         $user->name=$request->name;
         $user->email=$request->email;
         $user->password = Hash::make($request->password);
         $user->usertype=$request->usertype;
         $user->save();
         return redirect('users');}
      } else {
          return view('welcome');
      }
   }
   public function delete_user($id)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $user = User::find($id);
         $user->delete();
         return redirect()->back();}
      } else {
          return view('welcome');
      }
   }
   public function update_user($id)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $user = User::find($id);
         return view('admin.users.edituser',compact('user'));}
      } else {
          return view('welcome');
      }
   }
   public function edit_user(Request $request,$id)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $data=user::find($id);
         $data->name=$request->name;
         $data->email=$request->email;
         $data->password = Hash::make($request->password);
         $data->usertype=$request->usertype;
         $data->save();
         return redirect('users');}
      } else {
          return view('welcome');
      }

   }
  
   //CRUD hopital
   public function showhopital()
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $hopital = Hopital::all();
         return view('admin.hopital.home' , compact('hopital'));}
      } else {
          return view('welcome');
      }
   }
   public function addhopital()
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         return view('admin.hopital.addhopital');}
      } else {
          return view('welcome');
      }
   }
   public function add_hopital(Request $request)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $hopital=new hopital;
         $hopital->nom_hopital=$request->nom_hopital;
         $hopital->adresse=$request->adresse;
         $hopital->save();
         return redirect('hopital');}
      } else {
          return view('welcome');
      }
   }
   public function delete_hopital($id)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $hopital = Hopital::find($id);
         $hopital->delete();
         return redirect()->back();}
      } else {
          return view('welcome');
      }
   }
   public function update_hopital($id)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $hopital = Hopital::find($id);
         return view('admin.hopital.edithopital',compact('hopital'));}
      } else {
          return view('welcome');
      }
   }
   public function edit_hopital(Request $request,$id)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $hopital=Hopital::find($id);
         $hopital->nom_hopital=$request->nom_hopital;
         $hopital->adresse=$request->adresse;
         $hopital->save();
         return redirect('hopital');}
      } else {
          return view('welcome');
      }

   }
   //CRUD division
   public function showdivision()
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $division = Division::all();
         return view('admin.division.home' , compact('division'));}
      } else {
          return view('welcome');
      }
   }
   public function adddivision()
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $hopital = Hopital::all();
      return view('admin.division.adddivision',compact('hopital'));}
   } else {
       return view('welcome');
   }
   }
   public function add_division(Request $request)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $division=new division;
         $division->nom_division=$request->nom_division;
         $division->hopital_id=$request->hopital_id;
         $division->save();
         return redirect('division');}
      } else {
          return view('welcome');
      }
   }
   public function delete_division($id)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $division = Division::find($id);
         $division->delete();
         return redirect()->back();}
      } else {
         return view('welcome');
      }
   }
   public function update_division($id)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $division = Division::find($id);
         $hopital = Hopital::all();
         return view('admin.division.editdivision',compact('division','hopital'));}
      } else {
         return view('welcome');
      }
   }
   public function edit_division(Request $request,$id)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $division=Division::find($id);
         $division->nom_division=$request->nom_division;
         $division->hopital_id=$request->hopital_id;
         $division->save();
         return redirect('division');}
      } else {
         return view('welcome');
      }
   }
   //CRUD service
   public function showservice()
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $service = Service::all();
         return view('admin.service.home' , compact('service'));}
      } else {
         return view('welcome');
      }
   }
   public function addservice()
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
            $division = Division::all();
            $hopital = Hopital::all();
            return view('admin.service.addservice',compact('hopital','division'));}
         } else {
            return view('welcome');
         }
   }
   public function add_service(Request $request)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $service=new Service;
         $service->nom_service=$request->nom_service;
         $service->division_id=$request->division_id;
         $service->hopital_id=$request->hopital_id;
         $service->save();
         return redirect('service');}
      } else {
         return view('welcome');
      }
   }
   public function delete_service($id)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $service = service::find($id);
         $service->delete();
         return redirect()->back();}
      } else {
         return view('welcome');
      }
   }
   public function update_service($id)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $service = service::find($id);
         $hopital = Hopital::all();
         $division = Division::all();
         return view('admin.service.editservice',compact('service','hopital','division'));}
      } else {
         return view('welcome');
      }
   }
   public function edit_service(Request $request,$id)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
         $service=service::find($id);
         $service->nom_service=$request->nom_service;
         $service->division_id=$request->division_id;
         $service->hopital_id=$request->hopital_id;
         $service->save();
         return redirect('service');}
      } else {
         return view('welcome');
      }
   }
//CRUD unite
public function showunite()
{
   if (Auth::check()) {
      $usertype = Auth()->user()->usertype;
      if ($usertype == 'admin') {
      $unite = unite::all();
      return view('admin.unite.home' , compact('unite'));}
   } else {
      return view('welcome');
   }
}
public function addunite()
{
   if (Auth::check()) {
      $usertype = Auth()->user()->usertype;
      if ($usertype == 'admin') {
      $service = service::all();
      return view('admin.unite.addunite',compact('service'));}
   } else {
      return view('welcome');
   }
}
public function add_unite(Request $request)
{
   if (Auth::check()) {
      $usertype = Auth()->user()->usertype;
      if ($usertype == 'admin') {
      $unite=new unite;
      $unite->nom_unite=$request->nom_unite;
      $unite->service_id=$request->service_id;
      $unite->save();
      return redirect('unite');}
   } else {
      return view('welcome');
   }
}
public function delete_unite($id)
{
   if (Auth::check()) {
      $usertype = Auth()->user()->usertype;
      if ($usertype == 'admin') {
      $unite = unite::find($id);
      $unite->delete();
      return redirect()->back();}
   } else {
      return view('welcome');
   }
}
public function update_unite($id)
{
   if (Auth::check()) {
      $usertype = Auth()->user()->usertype;
      if ($usertype == 'admin') {
      $unite = unite::find($id);
      $service = service::all();
      return view('admin.unite.editunite',compact('unite','service'));}
   } else {
      return view('welcome');
   }
}
public function edit_unite(Request $request,$id)
{
   if (Auth::check()) {
      $usertype = Auth()->user()->usertype;
      if ($usertype == 'admin') {
      $unite=unite::find($id);
      $unite->nom_unite=$request->nom_unite;
      $unite->service_id=$request->service_id;
      $unite->save();
      return redirect('unite');}
   } else {
      return view('welcome');
   }
}

   
}
