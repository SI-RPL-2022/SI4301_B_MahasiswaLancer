<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="css/util.css">
 <link rel="stylesheet" type="text/css" href="css/main.css"> -->
    <link href="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <script src="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="{{ URL::asset('https://code.jquery.com/jquery-3.2.1.slim.min.js') }}"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }}"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js') }}"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ URL::asset('https://kit.fontawesome.com/1cea8d8163.js') }}" crossorigin="anonymous"></script>
    <style>

    </style>

    <!--===============================================================================================-->
</head>

<body style="background-color: #F3F9F3;">

    <nav class="navbar navbar-expand-sm"
        style="background-color:#ffff; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">

        <div class="container">
            <!-- Logo -->
            <div style="padding-left: 80px;">
                <a class="navbar-brand" href="{{ route('landingpage') }}">
                    <img src="{{ url('asset-images/LOGO MAHASISWALANCER.png') }}" alt="Avatar Logo" style="width:150px;">
                </a>
            </div>

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
                                        <li><a class="dropdown-item text-danger text-center" href="#"
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">Logout</a></li>
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

            <!-- Log Out -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboa rd="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel" style="color: red; margin-left:45%;">
                                Logout</h5>
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

    </nav>

    <x-jet-validation-errors class="mb-3 rounded-3" />
    @yield('container')


    <section class="row" style="background-color: #121814;">
        <div class="container text-center">
            <br>
            <img src="{{ url('asset-images/LOGO MAHASWISA LANCER white.png') }}" alt="Avatar Logo"
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

</body>

</html>
