<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="login-regis-images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-regis-vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-regis-fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-regis-fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-regis-vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-regis-vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-regis-vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-regis-vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-regis-vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/login-regis-util.css">
    <link rel="stylesheet" type="text/css" href="css/login-regis-main.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">
    <x-jet-validation-errors class="mb-3 rounded-0" />

    @if (session('status'))
        <div class="alert alert-success mb-3 rounded-0" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-10 p-t-100">
                        Login
                    </span>


                    <div class="mb-3">
                        <label for="email" class="form-label p-l-40 p-b-10"><b>Email</b></label>
                        <x-jet-input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email"
                            placeholder="Masukkan Email" type="email" name="email" :value="old('email')" required
                            style="border-radius: 15px; border-color: #E9EBFF;height:50px;width: 370px; margin-left: 40px;" />
                        <x-jet-input-error for="email"></x-jet-input-error>
                        {{-- <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email"
                            style="border-radius: 15px; border-color: #E9EBFF;height:50px;width: 370px; margin-left: 40px;"> --}}
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label p-l-40 p-b-10"><b>Password</b></label>
                        <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                            id="password" placeholder="Masukkan Password" type=" password" name="password" required
                            autocomplete="current-password"
                            style="border-radius: 15px; border-color: #E9EBFF;height:50px;width: 370px; margin-left: 40px;" />
                        <x-jet-input-error for="password"></x-jet-input-error>
                        {{-- <input type="password" class="form-control" id="password" placeholder="Masukkan Password"
                            name="password"
                            style="border-radius: 15px; border-color: #E9EBFF;height:50px;width: 370px; margin-left: 40px;"> --}}

                        @if (Route::has('password.request'))
                            <a class="text-muted me-3" href="{{ route('password.request') }}" style="margin-left: 50px;">
                                Lupa Password?
                            </a>
                        @endif
                    </div>


                    <div class="p-t-13">
                        <div class="custom-control custom-checkbox p-l-40" style=" margin-left: 40px;">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <label class="custom-control-label" for="remember_me">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="container-login100-form-btn p-t-13">

                        <x-jet-button class="login100-form-btn">
                            Login
                        </x-jet-button>
                    </div>

                    <div class="text-center p-t-20">
                        <span class="txt2">
                            Belum punya akun ? <a href="{{ route('register') }}"><b>Registrasi</b></a>
                        </span>
                    </div>
                </form>

                <div class="login100-more">
                    <div class="container">
                        <p class="p-t-80 text-center"><a href="/"><img src="login-regis-images/LOGO MAHASISWALANCER.png"></a></p>
                        <p class="p-t-90 text-center"><img src="login-regis-images/ilustrasi.png" style="width: 400px;"></p>
                        <div class="text-center p-t-30 p-b-10"><b>Atur Jadwalmu Jadi Produktif 👋 </b></div>
                        <p class="text-center" style="">Bantu kamu mengatur jadwal kegiatanmu sehari-hari dengan
                            mudah.
                            Jadikan harimu lebih produktif dengan menulis setiap kegiatanmu yang perlu diselesaikan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="login-regis-vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="login-regis-vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="login-regis-vendor/bootstrap/js/popper.js"></script>
    <script src="login-regis-vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="login-regis-vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="login-regis-vendor/daterangepicker/moment.min.js"></script>
    <script src="login-regis-vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="login-regis-vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/login-regis-main.js"></script>

</body>

</html>
