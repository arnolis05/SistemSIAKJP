@if(session()->has('error'))
    <script>
        alert("{{ session()->get('error') }}");
    </script>
@elseif(session()->has('cekmail'))
    <script>
        alert("{{ session()->get('cekmail') }}");
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
    <div class="container">
        <div class="content-page">
            <div class="content-img-bg">
                <img class="content-img-size-hero" src="{{asset('img/bg-hero.png')}}">
            </div>
            <div class="box-form-md">
                <form method="post" action="{{ url('/reset/password')}}">
                    @csrf();
                    <h3 class="title-md-pg-0">Masuk Akun</h3>
                    <div class="input-box">
                        <div class="box-icon">  
                            <i class="fa fa-envelope icon-center"></i>
                        </div>
                        <input class="box-input-sc" type="email" name="email" placeholder="Masukkan Email..." autofocus autocomplete="off">
                    </div>
                    <div class="input-button">
                        <input class="btn btn-success" type="submit" value="Kirim">
                        <span class="forgot-pass" onclick="logIn()">Kembali</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('style/js/all.js')}}"></script>
</body>
</html>