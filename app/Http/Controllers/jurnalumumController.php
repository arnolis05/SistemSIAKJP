<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jurnalumumController extends Controller
{
    public function index(){
        $sql = DB::table('tb_jurnalumum')
            ->get();
        return view('jurnalumum')
            ->with('sql',$sql);
    }
}
