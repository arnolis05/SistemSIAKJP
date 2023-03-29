<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function store(Request $r){
        session_start();
        $username = $r->username;
        $password = $r->password;

        $cek = DB::table('tb_user')
            ->where('username',$username)
            ->where('password',$password)
            ->first();
        if($cek == true){
            $token = $cek->token_access;
            session(['token'=>$token]); 
            session()->flash('success','Login Sukses');
            return redirect('/dashboard');
        }
        else{ 
            session()->flash('error','Invalid Credencials');
            return redirect('/');
        }
    }
}
