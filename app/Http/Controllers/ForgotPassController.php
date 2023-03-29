<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class ForgotPassController extends Controller
{
    public function index(){
        return view('forgotPass');
    }
    public function store(Request $r){
        $mail = $r->email;
        if($mail==null){
            session()->flash('error','Input Kosong');
            return redirect('/forgot/password');
        }
        else{
            $sql = DB::table('tb_userdetail')
                ->where('email',$mail)
                ->first();
            if($sql==true){
                Mail::to($mail)->send(new sendEmail());
                session()->flash('email','Berhasil mengirimkan reset password');
                return redirect('/');
            }
            else{
                session()->flash('cekmail','Data Email tidak sesuai');
                return redirect('/forgot/password');
            }
        }
    }
}
