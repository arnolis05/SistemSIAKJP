@if(session()->has('error'))
    <script>
        alert("{{ session()->get('error') }}");
    </script>
@elseif(session()->has('available'))
    <script>
        alert("{{ session()->get('available') }}");
    </script>
@elseif(session()->has('lengthmatch'))
    <script>
        alert("{{ session()->get('lengthmatch') }}");
    </script>
@endif
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
                    <div class="box-nav-list active">
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
                <div class="navbar-list-content" onclick="Nav_scr(9)">
                    <div class="box-nav-list">
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
                <a href="{{ url('/minyak') }}">Jenis Minyak</a> > {{ isset($value) ? "Ubah Data" : "Tambah Data" }}
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
                <span class="btn-add" onclick="table_data(1)"><i class="fa fa-table"></i> &nbsp;Tampilkan Data</span>
            </div>
            <div class="form-data">
                @if(isset($value))
                    @php
                        $sql = DB::table('tb_jenisminyak')
                            ->where('namaMinyak',$value)
                            ->first();
                        $key = $sql->id;
                    @endphp
                    <form method="post" action="/minyak/{{ encrypt($key) }}">
                        @csrf()
                        @method('put')
                        <div class="box-data-input">
                            <label class="title-sec-add">Nama Minyak</label>
                                <input type="hidden" name="id" value="{{ encrypt($key) }}">
                                <input type="text" name="nama_minyak" oninput="namaMinyak()" id="minyak" class="input-form-add" value="{{ $value }}" required>
                            <button class="btn-proses icon-white" id="btn-check"><i class="fa fa-check icon-size"></i> Simpan</button>
                        </div>
                    </form>
                @else
                    <form method="post" action="/pembelian/create">
                        @csrf()
                        <div class="box-buy-md">
                            <label class="title-buy-add">Nomor Bukti</label>
                            <span class="input-form-buy-add" name="noBukti" value="NBKSPBU202303272114">NBKSPBU202303272114</span>
                        </div>
                        <div class="box-buy-md">
                            <label class="title-buy-add">Jenis Minyak</label>
                            <select class="input-form-buy-add" type="text" name="noBukti">
                                @foreach($dataMinyak as $minyak)
                                    <option value="{{ $minyak->id }}">{{ $minyak->namaMinyak }}</option>
                                @endforeach()
                            </select>
                        </div>
                        <div class="box-buy-md">
                            <label class="title-buy-add">Tanggal</label>
                            <input class="input-form-buy-add" type="date" name="tgl" value="02/04/2023">
                        </div>
                        <div class="box-buy-md">
                            <label class="title-buy-add">Nama Supplier</label>
                            <input class="input-form-buy-add" type="text" name="nama_supp">
                        </div>
                        <div class="box-buy-md">
                            <label class="title-buy-add">Nomor Bukti</label>
                            <span class="input-form-buy-add" name="noBukti" value="NBKSPBU202303272114">NBKSPBU202303272114</span>
                        </div>
                        <div class="box-buy-md">
                            <label class="title-buy-add">Jenis Minyak</label>
                            <select class="input-form-buy-add" type="text" name="noBukti">
                                @foreach($dataMinyak as $minyak)
                                    <option value="{{ $minyak->id }}">{{ $minyak->namaMinyak }}</option>
                                @endforeach()
                            </select>
                        </div>
                        <div class="box-buy-md">
                            <label class="title-buy-add">Tanggal</label>
                            <input class="input-form-buy-add" type="date" name="tgl" value="02/04/2023">
                        </div>
                        <div class="box-buy-md">
                            <label class="title-buy-add">Nama Supplier</label>
                            <input class="input-form-buy-add" type="text" name="nama_supp">
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
    <script src="{{asset('style/js/all.js')}}"></script>
</body>
</html>