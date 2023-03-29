<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class assettetapController extends Controller
{
    public function index(){
        if(!session('token')){
            return redirect('/');
        }
        else{
            $sql = DB::table('tb_assettetap')->get();
            return view('assettetap')
                ->with('sql',$sql);
        }
    }
}
