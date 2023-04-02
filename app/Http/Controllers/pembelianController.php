<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pembelianController extends Controller
{
    public function index(){
        $sql = DB::table('tb_pembelian')
            ->join('tb_jenisminyak','tb_jenisminyak.id','=','tb_pembelian.id_jenisminyak')
            ->join('tb_supplier','tb_supplier.id_jenisminyak','=','tb_jenisminyak.id')
            ->select("tb_pembelian.id","tb_pembelian.noBukti","tb_pembelian.tgl","tb_jenisminyak.namaMinyak",
            "tb_supplier.nama_supplier","tb_supplier.npwp_sup","tb_supplier.alamat","tb_supplier.kontak_pic",
            "tb_supplier.email","tb_supplier.jumlah_liter")
            ->get();
        return view('pembelian')
            ->with('sql',$sql);
    }
    public function tambah(){
        $dataMinyak = DB::table('tb_jenisminyak')
            ->get();
        return view('pembelianAdd')
            ->with('dataMinyak',$dataMinyak);
    }
}
