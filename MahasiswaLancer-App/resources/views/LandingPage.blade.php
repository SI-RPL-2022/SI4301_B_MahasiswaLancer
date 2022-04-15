<!DOCTYPE html>
<html lang="en">

<head>
    <title>MAHASISWALANCER</title>
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <!--===============================================================================================-->
</head>

<body>
    <section id="home">
        <div class="row" style="background-color: #DAE3DC;">
            <a class="navbar-brand" href="#" style="padding-left: 100px; padding-top: 30px;">
                <img src="asset-images/LOGO MAHASISWALANCER.png" alt="Avatar Logo" style="width:150px;">
            </a>

            <ul class="nav" style="padding-left: 90px; padding-top: 30px;">
                <li class="nav-item p-l-250">
                    <a class="nav-link text-black" href="#home"><b>Home</b></a>
                </li>
                <li class="nav-item p-l-50">
                    <a class="nav-link text-black" href="#fitur"><b>Fitur</b></a>
                </li>
                <li class="nav-item  p-l-50">
                    <a class="nav-link text-black" href="#jasa"><b>Jasa</b></a>
                </li>
            </ul>

            @auth
                <img class="rounded-circle" alt="40x40" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
                    data-holder-rendered="true" style="margin-top: 27px; width: 40px;height: 40px; margin-left: 350px;">
                <div class="dropdown">
                    <button class="dropdown-toggle" data-toggle="dropdown" style="margin-top: 35px; margin-left: 15px;">
                      {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu" style="border-radius: 10px; border-color: #DAE3DC;">
                        <a class="dropdown-item text-center" href="{{ route('profile.show') }}">Profile</a>
                        <a class="dropdown-item text-center" href="#">Status Pengerjaan</a>
                        <a class="dropdown-item text-danger text-center" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">Logout</a>
                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                          @csrf
                      </form>
                    </div>
                </div>
                {{-- <x-jet-dropdown id="settingsDropdown">
                  <x-slot name="trigger">
                      @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                          <img class="rounded-circle" width="32" height="32" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                      @else
                          {{ Auth::user()->name }}

                          <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                      @endif
                  </x-slot>

                  <x-slot name="content">
                      <!-- Account Management -->
                      <h6 class="dropdown-header small text-muted">
                          {{ __('Manage Account') }}
                      </h6>

                      <x-jet-dropdown-link href="{{ route('profile.show') }}">
                          {{ __('Profile') }}
                      </x-jet-dropdown-link>

                      @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                          <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                              {{ __('API Tokens') }}
                          </x-jet-dropdown-link>
                      @endif

                      <hr class="dropdown-divider">

                      <!-- Authentication -->
                      <x-jet-dropdown-link href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                          {{ __('Log out') }}
                      </x-jet-dropdown-link>
                      <form method="POST" id="logout-form" action="{{ route('logout') }}">
                          @csrf
                      </form>
                  </x-slot>
              </x-jet-dropdown> --}}
            @else
            <ul class="nav" style="margin-left: 330px; margin-top: 30px;">

              <li class="nav-item" style="padding-right: 30px;">
                  <a class="nav-link text-black" href="{{ route('login') }}"><b>Masuk</b></a>
              </li>
              <li class="nav-item" style="padding-right: 40px; padding-top: 5px;">
                  <a href="{{ route('register') }}" class="btn-sm text-light px-3"
                      style="background-color: #151E17; border-radius: 86px; width: 100px;"><b>Daftar</b></a>
              </li>
          </ul>
            @endauth

            

            <div class="container m-l-150">
                <div class="row">
                    <div class="col-5" style="padding-top: 200px;">
                        <h3><b>Temukan MahasiswaLancer untuk Bantu Projectmu</b></h3>
                        <br>
                        <a style="color: #626E65;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra
                            varius donec sed nec. </a>
                    </div>
                    <div class="col-5 p-t-70" style="padding-left: 400px;">
                        <a><img src="asset-images/girl.png"></a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="fitur">
        <div class="row" style="background: #F3F9F3; height: 590px;">
            <div class="container p-t-80">
                <h1 class="text-center"><b>Bersama Kami</b></h1>
                <h1 class="text-center p-t-20"><b>Mudah dan Murah</b></h1>

                <div class="card-group p-t-60">
                    <div class="card" style="border-color: #F3F9F3;">
                        <img src="asset-images/search.png" class="card-img-top p-t-50 m-l-40" alt="..."
                            style="width: 50px;">
                        <div class="card-body m-l-25">
                            <h6 class="card-title"><b>Pilih Jasa yang Sesuai</b></h6>
                            <p class="card-text">Lorem ipsum dolor sit amet, consecter adipising elit. Elit urna
                                tellus feugiat lacus sit.</p>
                            <br>
                            <a href=""><u><b>Learn More</b></u></a>
                        </div>
                    </div>

                    <div class="card"
                        style="border-color: #F3F9F3; background-color: rgba(255, 255, 255, 0.6);">
                        <img src="asset-images/two-users.png" class="card-img-top p-t-50 m-l-40" alt="..."
                            style="width: 50px;">
                        <div class="card-body m-l-25">
                            <h6 class="card-title"><b>Pilih Jasa yang Sesuai</b></h6>
                            <p class="card-text">Lorem ipsum dolor sit amet, consecter adipising elit. Elit urna
                                tellus feugiat lacus sit.</p>
                            <br>
                            <a href=""><u><b>Learn More</b></u></a>
                        </div>
                    </div>

                    <div class="card"
                        style="border-color: #F3F9F3; background-color: rgba(255, 255, 255, 0.4)">
                        <img src="asset-images/wallet.png" class="card-img-top p-t-50 m-l-40" alt="..."
                            style="width: 50px;">
                        <div class="card-body m-l-25">
                            <h6 class="card-title"><b>Pilih Jasa yang Sesuai</b></h6>
                            <p class="card-text">Lorem ipsum dolor sit amet, consecter adipising elit. Elit urna
                                tellus feugiat lacus sit.</p>
                            <br>
                            <a href=""><u><b>Learn More</b></u></a>
                        </div>
                    </div>

                    <div class="card"
                        style="border-color: #F3F9F3; background-color: rgba(255, 255, 255, 0.1)">
                        <img src="asset-images/flag.png" class="card-img-top p-t-50 m-l-40" alt="..."
                            style="width: 50px;">
                        <div class="card-body m-l-25">
                            <h6 class="card-title"><b>Pilih Jasa yang Sesuai</b></h6>
                            <p class="card-text">Lorem ipsum dolor sit amet, consecter adipising elit. Elit urna
                                tellus feugiat lacus sit.</p>
                            <br>
                            <a href=""><u><b>Learn More</b></u></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="jasa">
        <div class="row" style="background: #121814; height: 1700px;">
            <div class="container p-t-80">
                <h1 class="text-center text-white"><b>Berbagai Pilihan Jasa</b></h1>
                <h1 class="text-center text-white p-t-20"><b>Sesuai Kebutuhanmu</b></h1>
                <div class="row p-l-40 p-t-50">
                    <span class="badge badge-pill" style="background-color: grey;">Bisnis</span>
                    <span class="badge badge-pill" style="background-color: grey; margin-left: 50px;">Akademik</span>
                    <span class="badge badge-pill" style="background-color: grey; margin-left: 50px;">Pemasaran</span>
                    <span class="badge badge-pill" style="background-color: grey; margin-left: 50px;">Desain</span>
                    <span class="badge badge-pill" style="background-color: grey; margin-left: 50px;">Finance</span>
                    <span class="badge badge-pill" style="background-color: grey; margin-left: 50px;">Ilmu
                        Komputer</span>
                    <span class="badge badge-pill" style="background-color: grey; margin-left: 50px;">Fotografi</span>
                    <span class="badge badge-pill" style="background-color: grey; margin-left: 50px;">Videografi</span>
                    <span class="badge badge-pill" style="background-color: grey; margin-left: 50px;">Leadership</span>
                </div>
                <div class="row p-l-80 p-t-20">
                    <span class="badge badge-pill" style="background-color: grey;">Matematika</span>
                    <span class="badge badge-pill" style="background-color: grey; margin-left: 50px;">Ekonomi</span>
                    <span class="badge badge-pill" style="background-color: grey; margin-left: 50px;">Jaringan</span>
                    <span class="badge badge-pill" style="background-color: grey; margin-left: 50px;">UI/UX</span>
                    <span class="badge badge-pill" style="background-color: grey; margin-left: 50px;">Pengembangan
                        Diri</span>
                    <span class="badge badge-pill" style="background-color: grey; margin-left: 50px;">Leadership</span>
                    <span class="badge badge-pill" style="background-color: grey; margin-left: 50px;">Digital</span>
                    <span class="badge badge-pill" style="background-color: grey; margin-left: 50px;">Geografi
                        Bumi</span>
                </div>

                <h4 style="padding-top: 80px; color: #E5A426;"><b>Rekomendasi Jasa Lainnya</b></h4>

                <div class="row" style="width: 1200px;">

                    <!-- Card 1 -->
                    <div class="card"
                        style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 320px; background-color: #202922;">
                        <img src="asset-images/gambar card.png" class="card-img-top" alt="..."
                            style="width: 100%; border-top-left-radius: 30px; border-top-right-radius: 30px; ">
                        <div class="card-body px-4">
                            <p class="card-title text-white"><b>Desain UI/UX untuk Apps dan
                                    Website menggunakan Figma</b></p>
                            <p class="card-text" style="color: #E5A426;"><b>Rp. 350.000</b></p>
                            <div class="row p-t-10">
                                <div class="col-sm-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" alt="..."
                                        class="rounded-circle" style="width: 30px;">
                                </div>
                                <div class="col">
                                    <p class="text-white">Shobrul Jamel</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="card"
                        style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 320px; background-color: #202922;">
                        <img src="asset-images/gambar card.png" class="card-img-top" alt="..."
                            style="width: 100%; border-top-left-radius: 30px; border-top-right-radius: 30px; ">
                        <div class="card-body px-4">
                            <p class="card-title text-white"><b>Desain UI/UX untuk Apps dan
                                    Website menggunakan Figma</b></p>
                            <p class="card-text" style="color: #E5A426;"><b>Rp. 350.000</b></p>
                            <div class="row p-t-10">
                                <div class="col-sm-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" alt="..."
                                        class="rounded-circle" style="width: 30px;">
                                </div>
                                <div class="col">
                                    <p class="text-white">Shobrul Jamel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="card"
                        style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 320px; background-color: #202922;">
                        <img src="asset-images/gambar card.png" class="card-img-top" alt="..."
                            style="width: 100%; border-top-left-radius: 30px; border-top-right-radius: 30px; ">
                        <div class="card-body px-4">
                            <p class="card-title text-white"><b>Desain UI/UX untuk Apps dan
                                    Website menggunakan Figma</b></p>
                            <p class="card-text" style="color: #E5A426;"><b>Rp. 350.000</b></p>
                            <div class="row p-t-10">
                                <div class="col-sm-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" alt="..."
                                        class="rounded-circle" style="width: 30px;">
                                </div>
                                <div class="col">
                                    <p class="text-white">Shobrul Jamel</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="card"
                        style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 320px; background-color: #202922;">
                        <img src="asset-images/gambar card.png" class="card-img-top" alt="..."
                            style="width: 100%; border-top-left-radius: 30px; border-top-right-radius: 30px; ">
                        <div class="card-body px-4">
                            <p class="card-title text-white"><b>Desain UI/UX untuk Apps dan
                                    Website menggunakan Figma</b></p>
                            <p class="card-text" style="color: #E5A426;"><b>Rp. 350.000</b></p>
                            <div class="row p-t-10">
                                <div class="col-sm-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" alt="..."
                                        class="rounded-circle" style="width: 30px;">
                                </div>
                                <div class="col">
                                    <p class="text-white">Shobrul Jamel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 style="padding-top: 50px; color: #E5A426;"><b>Jasa Terlaris</b></h4>

                <div class="row" style="width: 1200px;">

                    <!-- Card 1 -->
                    <div class="card"
                        style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 320px; background-color: #202922;">
                        <img src="asset-images/gambar card.png" class="card-img-top" alt="..."
                            style="width: 100%; border-top-left-radius: 30px; border-top-right-radius: 30px; ">
                        <div class="card-body px-4">
                            <p class="card-title text-white"><b>Desain UI/UX untuk Apps dan
                                    Website menggunakan Figma</b></p>
                            <p class="card-text" style="color: #E5A426;"><b>Rp. 350.000</b></p>
                            <div class="row p-t-10">
                                <div class="col-sm-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" alt="..."
                                        class="rounded-circle" style="width: 30px;">
                                </div>
                                <div class="col">
                                    <p class="text-white">Shobrul Jamel</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="card"
                        style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 320px; background-color: #202922;">
                        <img src="asset-images/gambar card.png" class="card-img-top" alt="..."
                            style="width: 100%; border-top-left-radius: 30px; border-top-right-radius: 30px; ">
                        <div class="card-body px-4">
                            <p class="card-title text-white"><b>Desain UI/UX untuk Apps dan
                                    Website menggunakan Figma</b></p>
                            <p class="card-text" style="color: #E5A426;"><b>Rp. 350.000</b></p>
                            <div class="row p-t-10">
                                <div class="col-sm-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" alt="..."
                                        class="rounded-circle" style="width: 30px;">
                                </div>
                                <div class="col">
                                    <p class="text-white">Shobrul Jamel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="card"
                        style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 320px; background-color: #202922;">
                        <img src="asset-images/gambar card.png" class="card-img-top" alt="..."
                            style="width: 100%; border-top-left-radius: 30px; border-top-right-radius: 30px; ">
                        <div class="card-body px-4">
                            <p class="card-title text-white"><b>Desain UI/UX untuk Apps dan
                                    Website menggunakan Figma</b></p>
                            <p class="card-text" style="color: #E5A426;"><b>Rp. 350.000</b></p>
                            <div class="row p-t-10">
                                <div class="col-sm-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" alt="..."
                                        class="rounded-circle" style="width: 30px;">
                                </div>
                                <div class="col">
                                    <p class="text-white">Shobrul Jamel</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="card"
                        style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 320px; background-color: #202922;">
                        <img src="asset-images/gambar card.png" class="card-img-top" alt="..."
                            style="width: 100%; border-top-left-radius: 30px; border-top-right-radius: 30px; ">
                        <div class="card-body px-4">
                            <p class="card-title text-white"><b>Desain UI/UX untuk Apps dan
                                    Website menggunakan Figma</b></p>
                            <p class="card-text" style="color: #E5A426;"><b>Rp. 350.000</b></p>
                            <div class="row p-t-10">
                                <div class="col-sm-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" alt="..."
                                        class="rounded-circle" style="width: 30px;">
                                </div>
                                <div class="col">
                                    <p class="text-white">Shobrul Jamel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 style="padding-top: 50px; color: #E5A426;"><b>Rekomendasi Jasa</b></h4>

                <div class="row" style="width: 1200px;">

                    <!-- Card 1 -->
                    <div class="card"
                        style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 320px; background-color: #202922;">
                        <img src="asset-images/gambar card.png" class="card-img-top" alt="..."
                            style="width: 100%; border-top-left-radius: 30px; border-top-right-radius: 30px; ">
                        <div class="card-body px-4">
                            <p class="card-title text-white"><b>Desain UI/UX untuk Apps dan
                                    Website menggunakan Figma</b></p>
                            <p class="card-text" style="color: #E5A426;"><b>Rp. 350.000</b></p>
                            <div class="row p-t-10">
                                <div class="col-sm-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" alt="..."
                                        class="rounded-circle" style="width: 30px;">
                                </div>
                                <div class="col">
                                    <p class="text-white">Shobrul Jamel</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="card"
                        style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 320px; background-color: #202922;">
                        <img src="asset-images/gambar card.png" class="card-img-top" alt="..."
                            style="width: 100%; border-top-left-radius: 30px; border-top-right-radius: 30px; ">
                        <div class="card-body px-4">
                            <p class="card-title text-white"><b>Desain UI/UX untuk Apps dan
                                    Website menggunakan Figma</b></p>
                            <p class="card-text" style="color: #E5A426;"><b>Rp. 350.000</b></p>
                            <div class="row p-t-10">
                                <div class="col-sm-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" alt="..."
                                        class="rounded-circle" style="width: 30px;">
                                </div>
                                <div class="col">
                                    <p class="text-white">Shobrul Jamel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="card"
                        style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 320px; background-color: #202922;">
                        <img src="asset-images/gambar card.png" class="card-img-top" alt="..."
                            style="width: 100%; border-top-left-radius: 30px; border-top-right-radius: 30px; ">
                        <div class="card-body px-4">
                            <p class="card-title text-white"><b>Desain UI/UX untuk Apps dan
                                    Website menggunakan Figma</b></p>
                            <p class="card-text" style="color: #E5A426;"><b>Rp. 350.000</b></p>
                            <div class="row p-t-10">
                                <div class="col-sm-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" alt="..."
                                        class="rounded-circle" style="width: 30px;">
                                </div>
                                <div class="col">
                                    <p class="text-white">Shobrul Jamel</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="card"
                        style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 320px; background-color: #202922;">
                        <img src="asset-images/gambar card.png" class="card-img-top" alt="..."
                            style="width: 100%; border-top-left-radius: 30px; border-top-right-radius: 30px; ">
                        <div class="card-body px-4">
                            <p class="card-title text-white"><b>Desain UI/UX untuk Apps dan
                                    Website menggunakan Figma</b></p>
                            <p class="card-text" style="color: #E5A426;"><b>Rp. 350.000</b></p>
                            <div class="row p-t-10">
                                <div class="col-sm-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" alt="..."
                                        class="rounded-circle" style="width: 30px;">
                                </div>
                                <div class="col">
                                    <p class="text-white">Shobrul Jamel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="row" style="background: #F3F9F3;">
        <div class="container p-t-80">
            <h1 class="text-center"><b>Apa Kata Meraka</b></h1>
            <h1 class="text-center p-t-20"><b>Setelah Bersama Kami</b></h1>
            <img src="asset-images/comment.png" style="padding-left: 60px;">
        </div>
    </div>

    <section class="row" style="background-color: #121814;">
        <div class="container text-center">
            <br>
            <img src="asset-images/LOGO MAHASWISA LANCER white.png" alt="Avatar Logo"
                style="width:250px; margin-top: 50px;">
            <p class="text-center text-white m-t-20 m-b-100" style="margin-left: 150px; margin-right: 150px;">
                “MahasiswaLancer” merupakan sebuah platform yang dapat menghubungkan user yang membutuhkan jasa untuk
                menyelesaikan proyeknya dan mahasiswa yang menawarkan jasanya dengan skill yang dimilikinya.</p>
        </div>
    </section>
    <div class="row" style="background-color: #000000;">
        <div class="container">
            <p class="text-center text-white p-t-20" style="height: 60px;">© 2022 MahasiswaLancer. All Rights Reserved
            </p>
        </div>
    </div>

</body>

</html>
