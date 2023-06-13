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
use function PHPUnit\Framework\isNull;

class AdminController extends Controller
{
   //CRUD user
   public function showusers()
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
            $User = User::paginate(5);
            $service = Service::all();
            $usertypee='';
            return view('admin.users.home' , compact('User','usertypee','service'));}
         } else {
             return view('welcome');
         }
   }
   public function adduser()
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
            $service = Service::all();
            return view('admin.users.adduser',compact('service'));}
         } else {
             return view('welcome');
         }
   }
   public function add_user(Request $request)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
           
            if ($request->usertype == 'manager' || $request->usertype == 'user' || $request->usertype == 'admin'  ){
               $user=new user;
         $user->name=$request->name;
         $user->email=$request->email;
         $user->password = Hash::make($request->password);
         $user->usertype=$request->usertype;
         $user->fonction= null;
         $user->service_id=null;
         $user->save();
         return redirect('users')->with('success','Utilisateur ajoutée');
            }else  if ($request->fonction == 'directeur' || $request->fonction == 'secretaire' ){
               $user=new user;
               $user->name=$request->name;
               $user->email=$request->email;
               $user->password = Hash::make($request->password);
               $user->usertype=$request->usertype;
               $user->fonction= $request->fonction;
               $user->service_id=null;
               $user->save();
               return redirect('users')->with('success','Utilisateur ajoutée');
            }else{
         $user=new user;
         $user->name=$request->name;
         $user->email=$request->email;
         $user->password = Hash::make($request->password);
         $user->usertype=$request->usertype;
         $user->fonction=$request->fonction;
         $user->service_id=$request->service_id;
         $user->save();
         return redirect('users')->with('success','Utilisateur ajoutée');}}
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
         return redirect()->back()->with('error','Utilisateur supprimé');}
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
         $service = Service::all();
         return view('admin.users.edituser',compact('user','service'));}
      } else {
          return view('welcome');
      }
   }
   public function edit_user(Request $request,$id)
   {
      if (Auth::check()) {
         $usertype = Auth()->user()->usertype;
         if ($usertype == 'admin') {
          
            if ($request->password == null){

            if ($request->usertype == 'manager' || $request->usertype == 'user' || $request->usertype == 'admin'  ){
             
               $data=user::find($id);
         $data->name=$request->name;
         $data->email=$request->email;
         $data->usertype=$request->usertype;
         $data->fonction= null;
         $data->service_id=null;
         $data->save();
         return redirect('users')->with('success','Utilisateur modifié');

            }else if ($request->fonction == 'directeur' || $request->fonction == 'secretaire' ){
              
               $data=user::find($id);
               $data->name=$request->name;
               $data->email=$request->email;
               
               $data->usertype=$request->usertype;
               $data->fonction= $request->fonction;
               $data->service_id=null;
               $data->save();
               return redirect('users')->with('success','Utilisateur modifié');
           
          } else {    
         $data=user::find($id);
         $data->name=$request->name;
         $data->email=$request->email;
        
         $data->usertype=$request->usertype;
         $data->fonction=$request->fonction;
         $data->service_id=$request->service_id;
         $data->save();
         return redirect('users')->with('success','Utilisateur modifié');
      } }else{
         if ($request->usertype == 'manager' || $request->usertype == 'user' || $request->usertype == 'admin'  ){
             
            $data=user::find($id);
      $data->name=$request->name;
      $data->email=$request->email;
      $data->password = Hash::make($request->password);
      $data->usertype=$request->usertype;
      $data->fonction= null;
      $data->service_id=null;
      $data->save();
      return redirect('users')->with('success','Utilisateur modifié');

         }else if ($request->fonction == 'directeur' || $request->fonction == 'secretaire' ){
           
            $data=user::find($id);
            $data->name=$request->name;
            $data->email=$request->email;
            $data->password = Hash::make($request->password);
            $data->usertype=$request->usertype;
            $data->fonction= $request->fonction;
            $data->service_id=null;
            $data->save();
            return redirect('users')->with('success','Utilisateur modifié');
        
       } else {    
      $data=user::find($id);
      $data->name=$request->name;
      $data->email=$request->email;
      $data->password = Hash::make($request->password);
      $data->usertype=$request->usertype;
      $data->fonction=$request->fonction;
      $data->service_id=$request->service_id;
      $data->save();
      return redirect('users')->with('success','Utilisateur modifié');
   }
      }}else {
          return view('welcome');
      } 

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
         return redirect('hopital')->with('success','Hôpital ajouté');}
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
         return redirect()->back()->with('error','Hôpital supprimé');}
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
         return redirect('hopital')->with('success','Hôpital modifié');}
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
         $division = Division::paginate(5);
         $hopital = Hopital::all();
         $hopitalId ='';
         return view('admin.division.home' , compact('division','hopitalId','hopital'));}
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
         return redirect('division')->with('success','Division ajoutée');}
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
         return redirect()->back()->with('error','Division supprimée');}
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
         return redirect('division')->with('success','Division modifiée');}
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
         $service = Service::paginate(5);
         $division = Division::all();
         $hopital = Hopital::all();
         $divisionId ="";
         return view('admin.service.home' , compact('service','divisionId','division','hopital'));}
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
         return redirect('service')->with('success','service ajouté');}
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
         return redirect()->back()->with('error','Service supprimé');}
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
         return redirect('service')->with('success','service modifié');}
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
      $unite = Unite::paginate(5);
      $service = Service::all();
      $serviceId ="";
      return view('admin.unite.home' , compact('unite','service','serviceId'));}
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
      return redirect('unite')->with('success','unité ajouté');}
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
      return redirect()->back()->with('error','Unité supprimée');}
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
      return redirect('unite')->with('success','unité modifiée');}
   } else {
      return view('welcome');
   }
}
public function filterUsers(Request $request)
{
    
    $name = $request->input('name','');
    $usertypee = $request->input('usertypee','');
    $query = User::query();

    if ($usertypee) {
      $query->where('usertype', $usertypee);
  }
    // Apply service filter if selected
  
    // Apply sorting by name if selected
    if ($name) {
      $query->where('name', 'LIKE', "$name%");
  }

    $User = $query->paginate(5);
    $service = Service::all();
    

    return view('admin.users.home', compact('User', 'usertypee','service'));
}
public function filterDivision(Request $request)
{
    $hopitalId = $request->input('hopitalId','');
 
    $name = $request->input('name','');

    $query = Division::query();

    // Apply service filter if selected
    if ($hopitalId) {
        $query->where('hopital_id', $hopitalId);
    }

    // Apply sorting order if selected
    
    // Apply sorting by name if selected
    if ($name === 'asc') {
        $query->orderBy('nom_division', 'asc');
    } elseif ($name === 'desc') {
        $query->orderBy('nom_division', 'desc');
    }

    $division = $query->paginate(5);
    
    $hopital = Hopital::all();

    return view('admin.division.home', compact('division', 'hopital','hopitalId'));
}
public function filterService(Request $request)
{
    $divisionId = $request->input('divisionId','');
 
    $name = $request->input('name','');

    $query = Service::query();

    // Apply service filter if selected
    if ($divisionId) {
        $query->where('division_id', $divisionId);
    }

    // Apply sorting order if selected
    
    // Apply sorting by name if selected
    if ($name === 'asc') {
        $query->orderBy('nom_service', 'asc');
    } elseif ($name === 'desc') {
        $query->orderBy('nom_service', 'desc');
    }

    $service = $query->paginate(5);
    
    $division = Division::all();
    $hopital = Hopital::all();

    return view('admin.service.home', compact('service', 'division','divisionId','hopital'));
}
public function filterUnite(Request $request)
{
    $serviceId = $request->input('serviceId','');
 
    $name = $request->input('name','');

    $query = Unite::query();

    // Apply service filter if selected
    if ($serviceId) {
        $query->where('service_id', $serviceId);
    }

    // Apply sorting order if selected
    
    // Apply sorting by name if selected
    if ($name === 'asc') {
        $query->orderBy('nom_unite', 'asc');
    } elseif ($name === 'desc') {
        $query->orderBy('nom_unite', 'desc');
    }

    $unite = $query->paginate(5);
    
    $service = Service::all();

    return view('admin.unite.home', compact('unite', 'service','serviceId'));
}
   
}
