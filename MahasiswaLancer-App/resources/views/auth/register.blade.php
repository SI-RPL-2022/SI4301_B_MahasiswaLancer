<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="asset-images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset-vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset-fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset-fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset-vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset-vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset-vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset-vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset-vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/asset-util.css">
    <link rel="stylesheet" type="text/css" href="css/asset-main.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

    <x-jet-validation-errors class="mb-3" />

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <span class="login100-form-title p-b-10">
                        Daftar
                    </span>

                    <div class="mb-3 mt-3">
                        <label for="nama" class="form-label p-l-40 p-b-10"><b>Nama</b></label>
                        <x-jet-input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                            name="name" :value="old('name')" id="nama" placeholder="Masukkan Nama" required autofocus
                            autocomplete="name"
                            style="border-radius: 15px; border-color: #E9EBFF;height:50px;width: 370px; margin-left: 40px;" />
                        <x-jet-input-error for="name" class="invalid-feedback p-l-40"></x-jet-input-error>
                        {{-- <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="email"
                            style="border-radius: 15px; border-color: #E9EBFF;height:50px;width: 370px; margin-left: 40px;"> --}}
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label p-l-40 p-b-10"><b>Email</b></label>
                        <x-jet-input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                            name="email" :value="old('email')" id="email" placeholder="Masukkan Email" required
                            style="border-radius: 15px; border-color: #E9EBFF;height:50px;width: 370px; margin-left: 40px;" />
                        <x-jet-input-error for="email" class="invalid-feedback p-l-40"></x-jet-input-error>
                        {{-- <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email"
                            style="border-radius: 15px; border-color: #E9EBFF;height:50px;width: 370px; margin-left: 40px;"> --}}
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label p-l-40 p-b-10"><b>Password</b></label>
                        <x-jet-input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                            type="password" name="password" id="password" placeholder="Masukkan Password" required
                            autocomplete="new-password"
                            style="border-radius: 15px; border-color: #E9EBFF;height:50px;width: 370px; margin-left: 40px;" />
                        <x-jet-input-error for="password" class="invalid-feedback p-l-40"></x-jet-input-error>

                        {{-- <input type="password" class="form-control" id="password" placeholder="Masukkan Password"
                            name="password"
                            style="border-radius: 15px; border-color: #E9EBFF;height:50px;width: 370px; margin-left: 40px;"> --}}
                    </div>

                    <div class="mb-3">
                        <label for="konfirmasi_password" class="form-label p-l-40 p-b-10"><b>Konfirmasi
                                Password</b></label>
                        <x-jet-input class="form-control" id="konfirmasi_password" placeholder="Konfirmasi Password"
                            type="password" name="password_confirmation" required autocomplete="new-password"
                            style="border-radius: 15px; border-color: #E9EBFF;height:50px;width: 370px; margin-left: 40px;" />
                        {{-- <input type="password" class="form-control m-b-40" id="konfirmasi_password"
                            placeholder="Konfirmasi Password" name="konfirmasi_password"
                            style="border-radius: 15px; border-color: #E9EBFF;height:50px;width: 370px; margin-left: 40px;"> --}}
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label p-l-40 p-b-10"><b>Daftar Sebagai</b></label>
                        {{-- <x-jet-input class="form-control" id="role" placeholder="Konfirmasi Password" type="password"
                            name="password_confirmation" required autocomplete="new-password"
                            style="border-radius: 15px; border-color: #E9EBFF;height:50px;width: 370px; margin-left: 40px;" /> --}}
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="mahasiswa"
                                value="mahasiswa" style="margin-left: 40px;" >
                            <label class="form-check-label" for="mahasiswa" style="margin-left: 40px;">Mahasiswa</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="client"
                                value="client" style="margin-left: 40px;" >
                            <label class="form-check-label" for="client" style="margin-left: 40px;">Client</label>
                        </div>
                    </div>


                    <div class="container-login100-form-btn p-t-13">
                        {{-- <button class="login100-form-btn">
                            Daftar
                        </button> --}}
                        <x-jet-button class="login100-form-btn">
                            Daftar
                        </x-jet-button>
                    </div>

                    <div class="text-center p-t-20">
                        <span class="txt2">
                            Sudah punya akun ? <a href="{{ route('login') }}"><b>Masuk</b></a>
                        </span>
                    </div>
                </form>

                <div class="login100-more">
                    <div class="container">
                        <p class="p-t-80 text-center"><a href="/"><img src="asset-images/LOGO MAHASISWALANCER.png"></a>
                        </p>
                        <p class="p-t-90 text-center"><img src="asset-images/ilustrasi.png" style="width: 400px;"></p>
                        <div class="text-center p-t-30 p-b-10"><b>Selesaikan tugasmu melalui MahasiswaLancer 👋</b>
                        </div>
                        <p class="text-center" style="">Bantu kamu mengatur jadwal kegiatanmu sehari-hari dengan
                            mudah.
                            Jadikan harimu lebih produktif dengan menulis setiap kegiatanmu yang perlu diselesaikan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="asset-vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="asset-vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="asset-vendor/bootstrap/js/popper.js"></script>
    <script src="asset-vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="asset-vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="asset-vendor/daterangepicker/moment.min.js"></script>
    <script src="asset-vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="asset-vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/asset-main.js"></script>

</body>

</html>
