<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akuntansi Pajak</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/style/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('/style/css/devices.all.css')}}">
    <link rel="shortcut icon" href="{{asset('/img/logo.png')}}" type="image/x-icon">
    <script src="{{asset('js/script.js')}}"></script>
</head>
<body>
    <div class="container-dash">
        <div class="nav-box-flex">
            <div class="logo-box-top">
                <img class="logo-img-md" src="{{asset('/img/logo.png')}}">
            </div>
            <div class="navbar-content-box">
                <div class="navbar-list-content">
                    <div class="box-nav-list" onclick="Nav_scr(1)">
                        <i class="fa fa-globe icon-center-dash"></i>
                        <p class="title-nav">Dashboard</p>
                    </div>
                </div>
                <div class="navbar-list-content">
                    <div class="box-nav-list" onclick="Nav_scr(2)">
                        <i class="fa fa-user icon-center-dash"></i>
                        <p class="title-nav">Operator</p>
                    </div>
                </div>
                <div class="navbar-list-content" onclick="Nav_scr(3)">
                    <div class="box-nav-list">
                        <i class="fa fa-tint icon-center-dash"></i>
                        <p class="title-nav">Minyak</p>
                    </div>
                </div>
                <div class="navbar-list-content" onclick="Nav_scr(4)">
                    <div class="box-nav-list">
                        <i class="fa fa-retweet icon-center-dash"></i>
                        <p class="title-nav">Pengeluaran</p>
                    </div>
                </div>
                <div class="navbar-list-content" onclick="Nav_scr(5)">
                    <div class="box-nav-list">
                        <i class="fa fa-calendar icon-center-dash"></i>
                        <p class="title-nav">Laporan Harian</p>
                    </div>
                </div>
                <div class="navbar-list-content" onclick="Nav_scr(6)">
                    <div class="box-nav-list">
                        <i class="fa fa-cubes icon-center-dash"></i>
                        <p class="title-nav">Persediaan</p>
                    </div>
                </div>
                <div class="navbar-list-content" onclick="Nav_scr(7)">
                    <div class="box-nav-list">
                        <i class="fa fa-dollar icon-center-dash"></i>
                        <p class="title-nav">Pembelian</p>
                    </div>
                </div>
                <div class="navbar-list-content" onclick="Nav_scr(8)">
                    <div class="box-nav-list">
                        <i class="fa fa-pencil icon-center-dash"></i>
                        <p class="title-nav">Pengeluaran Kas</p>
                    </div>
                </div>
                <div class="navbar-list-content">
                    <div class="box-nav-list active">
                        <i class="fa fa-car icon-center-dash"></i>
                        <p class="title-nav">Aset Tetap</p>
                    </div>
                </div>
                <div class="navbar-list-content" onclick="Nav_scr(10)">
                    <div class="box-nav-list">
                        <i class="fa fa-puzzle-piece icon-center-dash"></i>
                        <p class="title-nav">Penyesuaian</p>
                    </div>
                </div>
                <div class="navbar-list-content" onclick="Nav_scr(11)">
                    <div class="box-nav-list">
                        <i class="fa fa-file icon-center-dash"></i>
                        <p class="title-nav">Jurnal Umum</p>
                    </div>
                </div>
                <div class="navbar-list-content" onclick="Nav_scr(12)">
                    <div class="box-nav-list">
                        <i class="fa fa-book icon-center-dash"></i>
                        <p class="title-nav">Laporan Keuangan</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-top-md">
            <div class="label-title-left">
                Aset Tetap
            </div>
            <div class="settings">
                <i class="fa fa-cogs"></i> settings   
            </div>
            <div class="digital-time">
                <i class="fa fa-clock"></i> <span id="jam">00 : 00 : 00</span>
            </div>  
        </div>
        <div class="content-box">
            <div class="page-add">
                <span class="btn-add"><i class="fa fa-pen"></i> &nbsp;Tambah Data</span>
            </div>
            <div class="table-mod">
                <table class="table-content-list">
                    <tr class="row-table">
                        <th class="header-table">#</th>
                        <th class="header-table">Nama Aset</th>
                        <th class="header-table">Tahun Perolehan</th>
                        <th class="header-table">Tarif Penyusutan</th>
                        <th class="header-table">Metode Penyusutan</th>
                        <th class="header-table">Beban Penyusutan</th>
                        <th class="header-table">Akun Penyusutan</th>
                        <th class="header-table">Aksi</th>
                    </tr>
                    @php
                        $no=1;
                    @endphp
                    @foreach($sql as $d)
                    <tr class="row-table">
                        <td class="desc-table center-content">{{ $no++ }}</td>
                        <td class="desc-table center-content">{{ $d->nama_aset }}</td>
                        <td class="desc-table center-content">{{ $d->tahun_perolehan }}</td>
                        <td class="desc-table center-content">{{ "Rp.".number_format($d->tarif_penyusutan,0,',','.') }}</td>
                        <td class="desc-table center-content">{{ $d->metode_penyusutan }}</td>
                        <td class="desc-table center-content">{{ "Rp.".number_format($d->beban_penyusutan,0,',','.') }}</td>  
                        <td class="desc-table center-content">{{ $d->akun_penyusutan }}</td>
                        <td class="desc-table center-content">
                            <i class="fa fa-pen-to-square pointer" onclick="editAsset('{{ encrypt($d->id,0.10 )}}')"></i> | <i class="fa fa-trash pointer" onclick="deleteAsset('{{ encrypt($d->id,0.10 )}}')"></i>
                        </td>
                    </tr> 
                    @endforeach()  
                </table>
            </div>   
        </div>
    </div>
    <script src="{{asset('style/js/all.js')}}"></script>
</body>
</html>