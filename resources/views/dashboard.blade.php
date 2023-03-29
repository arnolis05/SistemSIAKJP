@if(session()->has('success'))
    <script>
        alert("{{ session()->get('success') }}");
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
                    <div class="box-nav-list active">
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
                Dashboard
            </div>
            <div class="settings">
                <i class="fa fa-cogs"></i> settings   
            </div>
            <div class="digital-time">
                <i class="fa fa-clock"></i> <span id="jam">00 : 00 : 00</span>
            </div>  
        </div>
    </div>
    <script src="{{asset('style/js/all.js')}}"></script>
</body>
</html>