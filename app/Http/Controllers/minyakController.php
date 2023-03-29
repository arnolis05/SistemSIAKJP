<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class minyakController extends Controller
{
    public function index(){
        if(!session('token')){
            return redirect('/');
        }
        else{
            $query = DB::table('tb_jenisminyak')->get();
            return view('minyak')->with("query",$query);
        }
    }
    public function tambah(){
        return view('minyakAdd');
    }
    public function store(Request $r){
        $minyak = $r->nama_minyak;
        if($minyak==null){
            session()->flash("error","Anda belum memasukkan input!");
            return redirect('/minyak/tambah/data');
        }
        elseif(strlen($minyak)>=30){
            session()->flash("lengthmatch","Karakter melebihi 30 huruf!");
            return redirect('/minyak/tambah/data');
        }
        else{
            $cek = DB::table('tb_jenisminyak')
                ->where('namaMinyak',$minyak)
                ->first();
            if($cek){
                session()->flash("available","Data sudah tersedia!");
                return redirect('/minyak/tambah/data');
            }
            else{
                $sql = DB::table('tb_jenisminyak')->insert([
                    'namaMinyak' => $minyak
                ]);
                if(!$sql){
                    echo "gagal";
                    return redirect('/minyak');
                }
                else{
                    echo "berhasil";
                    return redirect('/minyak');
                }
            }
        }
    }
    public function edit($x){
        $query = DB::table('tb_jenisminyak')
            ->where('id',decrypt($x))
            ->first();
        $minyak = $query->namaMinyak;
        return view('minyakAdd')
            ->with('value',$minyak);
    }
    public function update(Request $x){
        $id = decrypt($x->id);
        if(($x->nama_minyak)==null){
            session()->flash("error","Anda belum memasukkan input!");
            return redirect("/minyak");
        }
        else{
            if(strlen($x->nama_minyak)>=30){
                session()->flash("lengthmatch","Karakter melebihi 30 huruf!");
                return redirect('/minyak');
            }
            else{
                $minyak = $x->nama_minyak;
                $update = DB::table('tb_jenisminyak')
                    ->where('id',$id)
                    ->update([
                        'namaMinyak' => $minyak
                    ]);
                return redirect('/minyak');
            }
        }
    }
    public function destroy($key){
        DB::table('tb_jenisminyak')
            ->where('id',decrypt($key))
            ->delete();
        return redirect('/minyak');
    }
}
