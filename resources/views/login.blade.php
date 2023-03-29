@if(session()->has('error'))
    <script>
        alert("{{ session()->get('error') }}");
    </script>
@elseif(session()->has('email'))
    <script>
        alert("{{ session()->get('email') }}");
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
                <img class="content-img-size-hero" loading="eager" src="{{asset('img/bg-hero.png')}}">
            </div>
            <div class="box-form-md">
                <form method="post" action="{{ url('/login/proses')}}">
                    @csrf();
                    <h3 class="title-md-pg-0">Masuk Akun</h3>
                    <div class="input-box">
                        <div class="box-icon">  
                            <i class="fa fa-user icon-center"></i>
                        </div>
                        <input class="box-input-sc" type="text" name="username" placeholder="Masukkan Username..." autofocus autocomplete="off">
                    </div>
                    <div class="input-box">
                        <div class="box-icon">
                            <i class="fa fa-lock icon-center"></i>
                        </div>
                        <input class="box-input-sc" type="password" name="password" placeholder="...................." autofocus autocomplete="off">
                    </div>
                    <div class="input-button">
                        <input class="btn btn-success" type="submit" value="Masuk">
                        <span class="forgot-pass" onclick="forgotPass()">Lupa Password?</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script text="text/js">
        document.oncontextmenu = clkRght;
        function clkRght(e){
            e.preventDefault();
        }
    </script>
    <script src="{{asset('style/js/all.js')}}"></script>
</body>
</html>