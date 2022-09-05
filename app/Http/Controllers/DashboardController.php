<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
   
public function Logout(){

 

    Auth::guard('web')->logout();

   return Redirect()->route('login')->with('success','User Logout');

}

public function Dashboard(){

    return view('dashboard');

}

}
