<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
   public function index(){

    return view('principal.index');
   }
   
   public function mantenedores(){

    return view('principal.mantenedores');
   }
}
