<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedure;
use Illuminate\Support\Facades\Auth;

class InterneController extends Controller
{
    public function showprocedure()
   {
    
    return view('interne.procedure.home');
   }
   public function addprocedure()
   {
    
    return view('interne.procedure.addprocedure');
   }
}
