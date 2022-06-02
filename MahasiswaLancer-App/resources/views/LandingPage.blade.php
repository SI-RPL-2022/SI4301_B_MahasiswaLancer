<!DOCTYPE html>
<html lang="en">

<head>
    <title>MAHASISWALANCER</title>
    <meta charset="UTF-8">
    <meta name="viewport">
    <!--===============================================================================================-->
    {{-- <link rel="icon" type="image/png" href="asset-images/icons/favicon.ico" /> --}}
    <link rel="icon" type="image/png" href="asset-asset-images/icons/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="width: 100%;">
    <div class="container-fluid">

        <section id="Home">
            <div class="row" style="background-color: #DAE3DC;">
                <div class="py-4 px-0" style="width: 100%;">
                    <div class="d-flex justify-content-between">

                        <!-- Logo -->
                        <div style="padding-left: 80px;">
                            <a class="navbar-brand" href="#">
                                <img src="asset-images/LOGO MAHASISWALANCER.png" alt="Avatar Logo" style="width:150px;">
                            </a>
                        </div>
                        <!-- item navs -->
                        <div class="hstack">
                            <a class="nav-link text-black" href="#home">Home</a>
                            <a class="nav-link text-black" href="#fitur">Fitur</a>
                            <a class="nav-link text-black" href="#jasa">Jasa</a>
                        </div>
                        {{-- <div  >
                            <a class="nav-link text-black" href="#fitur">Fitur</a>
                        </div>
                        <div  >
                            <a class="nav-link text-black" href="#jasa">Jasa</a>
                        </div> --}}
                        <!-- login & regist -->

                        @auth

                            <div class="hstack" style="padding-right: 30px;">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <img class="rounded-circle" width="40px" height="40px"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                @else
                                    {{ Auth::user()->name }}

                                    <svg class="ms-2" width="40px" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                @endif
                                {{-- <img class="rounded-circle" alt="40x40"
                                    src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
                                    data-holder-rendered="true" style=" width: 40px;height: 40px;"> --}}
                                <div class="dropdown">
                                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                        style="margin-left: 15px;">
                                        {{ Auth::user()->name }}
                                    </button>
                                    <ul class="dropdown-menu" style="border-radius: 10px; border-color: #DAE3DC;">
                                        @role('mahasiswa')
                                            <li><a class="dropdown-item text-center"
                                                    href="{{ route('biodata') }}">Dashboard</a>
                                            </li>
                                        @endrole
                                        @role('client')
                                            <li><a class="dropdown-item text-center"
                                                    href="{{ route('profile.show') }}">Profil</a>
                                            </li>
                                            <li><a class="dropdown-item text-center"
                                                    href="{{ route('statuspengerjaan') }}">Status Pengerjaan</a></li>
                                        @endrole

                                        <hr class="m-1">
                                        <li><a class="dropdown-item text-danger text-center" href="#" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        @else
                            <div class="hstack px-5">
                                <a class="nav-link text-black mx-3" href="{{ route('login') }}"><b>Masuk</b></a>

                                <a href="{{ route('register') }}" class="nav-link btn text-light px-3 py-1 mx-3"
                                    style="background-color: #151E17; border-radius: 86px; width: 100px;"><b>Daftar</b></a>
                            </div>

                        @endauth

                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboa
                            rd="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel"
                                            style="color: red; margin-left:45%;">Logout</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="text-align: center;">
                                        Apakah anda yakin ingin keluar ? <br /><br /><br />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn"
                                            style="margin-left:-500px; display: flex; flex-direction: row; justify-content: center; align-items: center; border: 1px solid #000000; box-sizing: border-box; border-radius: 10px; width: 219px; height: 60px;"
                                            data-bs-dismiss="modal">Batalkan</button>
                                        <a class="btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                                            style="display: flex; flex-direction: row; justify-content: center; align-items: center; width: 219px; background: #121814; border-radius: 10px; color: whitesmoke; height: 60px; ">Logout</a>
                                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <!-- text -->
                        <div class="col-5" style="padding-top: 200px; padding-left: 200px;">
                            <h3><b>Temukan MahasiswaLancer untuk Bantu Projectmu</b></h3>
                            <br>
                            <a style="color: #626E65;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra
                                varius donec
                                sed nec. </a>
                        </div>

                        <!-- image -->
                        <div class="col-5" style="padding-left: 250px; padding-top: 100px;">
                            <a><img src="asset-images/girl.png"></a>
                        </div>
                    </div>
                </div>
        </section>

        <section id="fitur">
            <div class="row" style="background: #F3F9F3; padding-bottom :80px;">
                <div class="container" style="padding-top: 80px;">
                    <h1 class="text-center"><b>Bersama Kami</b></h1>
                    <h1 class="text-center p-t-20"><b>Mudah dan Murah</b></h1>

                    <div class="container" style="padding-top: 60px;">
                        <!-- card1 -->

                        <div class="card-group">
                                <div class="card" style="border-color: #F3F9F3;">
                                    <img src="asset-images/search.png" class="card-img-top" alt="..."
                                        style="width: 100px; padding-top: 50px; padding-left: 40px;">
                                    <div class="card-body" style="padding-left: 40px;">
                                        <h6 class="card-title"><b>Pilih Jasa yang Sesuai</b></h6>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consecter adipising elit.
                                            Elit
                                            urna tellus feugiat
                                            lacus sit.</p>
                                        <br>
                                        <a class="text-black" href=""><u><b>Learn More</b></u></a>
                                    </div>
                                </div>
                            <!-- card2 -->
                            <div class="card"
                                style="border-color: #F3F9F3; background-color: rgba(255, 255, 255, 0.6);">
                                <img src="asset-images/two-users.png" class="card-img-top p-t-50 m-l-40" alt="..."
                                    style="width: 100px; padding-top: 50px; padding-left: 40px;">
                                <div class="card-body" style="padding-left: 40px;">
                                    <h6 class="card-title"><b>Pilih Jasa yang Sesuai</b></h6>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consecter adipising elit. Elit
                                        urna tellus feugiat
                                        lacus sit.</p>
                                    <br>
                                    <a class="text-black" href=""><u><b>Learn More</b></u></a>
                                </div>
                            </div>
                            <!-- card3 -->
                            <div class="card"
                                style="border-color: #F3F9F3; background-color: rgba(255, 255, 255, 0.4)">
                                <img src="asset-images/wallet.png" class="card-img-top p-t-50 m-l-40" alt="..."
                                    style="width: 100px; padding-top: 50px; padding-left: 40px;">
                                <div class="card-body" style="padding-left: 40px;">
                                    <h6 class="card-title"><b>Pilih Jasa yang Sesuai</b></h6>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consecter adipising elit. Elit
                                        urna tellus feugiat
                                        lacus sit.</p>
                                    <br>
                                    <a class="text-black" href=""><u><b>Learn More</b></u></a>
                                </div>
                            </div>
                            <!-- card4 -->
                            <div class="card"
                                style="border-color: #F3F9F3; background-color: rgba(255, 255, 255, 0.1)">
                                <img src="asset-images/flag.png" class="card-img-top p-t-50 m-l-40" alt="..."
                                    style="width: 100px; padding-top: 50px; padding-left: 40px;">
                                <div class="card-body" style="padding-left: 40px;">
                                    <h6 class="card-title"><b>Pilih Jasa yang Sesuai</b></h6>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consecter adipising elit. Elit
                                        urna tellus feugiat
                                        lacus sit.</p>
                                    <br>
                                    <a class="text-black" href=""><u><b>Learn More</b></u></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="jasa">
            <div class="row" style="background: #121814; padding-bottom: 80px;">
                <div class="container" style="padding-top: 80px;">
                    <h1 class="text-center text-white"><b>Berbagai Pilihan Jasa</b></h1>
                    <h1 class="text-center text-white p-t-20"><b>Sesuai Kebutuhanmu</b></h1>
                    <!-- kategori -->
                    <div class="container" style="padding-top: 50px; padding-left: 29%;">
                        <span class="badge rounded-pill bg-secondary" style="width: 80px;">UI/UX</span>
                        <span class="badge rounded-pill bg-secondary"
                            style="margin-left: 5%;width: 80px;">Finance</span>
                        <span class="badge rounded-pill bg-secondary"
                            style="margin-left: 5%;width: 80px;">Jaringan</span>
                        <span class="badge rounded-pill bg-secondary" style="margin-left: 5%;width: 80px;">Desain</span>
                    </div>
                    <!-- card -->
                    <h4 style="padding-top: 80px; padding-left: 11%; color: #E5A426;"><b>Jasa Terpopuler</b></h4>
                    <div class="row" style="padding-left: 11%;">
                        <!-- Card 1 -->
                        
                        <div class="card"
                            style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 340px; background-color: #202922;">
                            
                            <a href="{{ route('detailjasa') }}" class="text-dark">
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
                            </a>
                        </div>

                        <!-- Card 2 -->
                        <div class="card"
                            style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 340px; background-color: #202922;">
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
                            style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 340px; background-color: #202922;">
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
                            style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 340px; background-color: #202922;">
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

                    <!-- Card -->
                    <h4 style="padding-top: 80px; padding-left: 11%; color: #E5A426;"><b>Jasa Terlaris</b></h4>
                    <div class="row" style="padding-left: 11%;">
                        <!-- Card 1 -->
                        <div class="card"
                            style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 340px; background-color: #202922;">
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
                            style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 340px; background-color: #202922;">
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
                            style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 340px; background-color: #202922;">
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
                            style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 340px; background-color: #202922;">
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

                    <!-- Card -->
                    <h4 style="padding-top: 80px; padding-left: 11%; color: #E5A426;"><b>Rekomendasi Jasa</b></h4>
                    <div class="row" style="padding-left: 11%;">
                        <!-- Card 1 -->
                        <div class="card"
                            style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 340px; background-color: #202922;">
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
                            style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 340px; background-color: #202922;">
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
                            style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 340px; background-color: #202922;">
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
                            style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 340px; background-color: #202922;">
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

        <div class="row" style="background: #F3F9F3; padding-bottom: 80px">
            <div class="container" style="padding-top: 80px;">
                <h1 class="text-center"><b>Apa Kata Mereka</b></h1>
                <h1 class="text-center"><b>Setelah Bersama Kami</b></h1>
                <img src="asset-images/comment.png" style="padding-left: 17%; padding-top: 80px;">
            </div>
        </div>

        <section class="row" style="background-color: #121814;">
            <div class="container text-center">
                <br>
                <img src="asset-images/LOGO MAHASWISA LANCER white.png" alt="Avatar Logo"
                    style="width:250px; margin-top: 50px;">
                <p class="text-center text-white m-t-20 m-b-100"
                    style="margin-left: 150px; margin-right: 150px; padding-top: 20px; margin-bottom: 100px;">
                    “MahasiswaLancer”
                    merupakan sebuah platform yang dapat menghubungkan user yang membutuhkan jasa untuk menyelesaikan
                    proyeknya
                    dan mahasiswa yang menawarkan jasanya dengan skill yang dimilikinya.</p>
            </div>
        </section>
        <div class="row" style="background-color: #000000;">
            <div class="container">
                <p class="text-center text-white" style="height: 60px;padding-top: 25px;">© 2022 MahasiswaLancer. All
                    Rights
                    Reserved</p>
            </div>
        </div>
    </div>



</body>

</html>
