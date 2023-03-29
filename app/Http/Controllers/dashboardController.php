<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        if(!session('token')){
            return redirect('/');
        }
        else{
            return view('dashboard');
        }
    }
}
