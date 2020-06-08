<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;

class PagesController extends Controller
{   
      public function home()
    {
        // dd($mhs);
         return view('index'); 
    } 
      public function about()
    {
         return view('about'); 
    }   

    public function manageuser()
    {
        return view('manageuser');
    }
}