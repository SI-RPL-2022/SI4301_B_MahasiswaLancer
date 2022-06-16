<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MahasiswaLancer</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ URL::asset('assetsmhs/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assetsmhs/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assetsmhs/css/style.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ URL::asset('assetsmhs/images/dashboard/bxs_graduation1.png') }}" />

    {{-- <link rel="stylesheet" href="{{ URL::asset('assetsmhs/css/sidebar.scss') }}"> --}}
</head>

<body class>
    <div class="container-scroller">


        <div class="container-fluid page-body-wrapper">

            @section('sidebar')
                <nav class="sidebar sidebar-offcanvas" style="height: 100%; padding-top:4em;" id="sidebar">

                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboardMHS') }}">
                                <span class="menu-title">Dashboard</span>
                                <i class="mdi mdi-home menu-icon"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#jasadetail" aria-expanded="false"
                                aria-controls="jasadetail">
                                <span class="menu-title">Jasa</span>
                                <i class="menu-arrow"></i>
                                <i class="mdi mdi-account-card-details menu-icon"></i>
                            </a>
                            <div class="collapse" id="jasadetail" style="">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" style="color: #ffff"
                                            href="{{ route('jasa') }}">Lihat Jasa</a></li>
                                    <li class="nav-item"> <a class="nav-link" style="color: #ffff"
                                            href="{{ route('tambahjasa') }}">Tambah Jasa</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pesanan') }}">
                                <span class="menu-title">Pesanan</span>
                                <i class="mdi mdi-clipboard-text menu-icon"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('statusPekerjaan') }}" aria-expanded="false"
                                aria-controls="ui-basic">
                                <span class="menu-title">Status Pengerjaan</span>
                                <i class="mdi mdi-comment menu-icon"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('biodata') }}">
                                <span class="menu-title">Biodata</span>
                                <i class="mdi mdi-account-edit menu-icon"></i>
                            </a>
                        </li>
                        <li class="nav-item" style="margin-top: 140%;">
                            {{-- <a >{{ $slot }}</a> --}}

                            {{-- <a class="nav-link" href="{{ route('logout') }}" {{ $attributes->merge() }} onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <span class="menu-title">Logout</span>
                            <i class="mdi mdi-logout menu-icon"></i>
                        </a> --}}
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <span class="menu-title">Logout</span>
                                <i class="mdi mdi-logout menu-icon"></i>
                            </a>


                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
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

                        </li>
                    </ul>
                </nav>
            @show

            <div class="main-panel">
                <div class="content-wrapper mt-5">
                    <div class="row">
                        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row"
                            style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
                            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
                                style="background-color: black;">
                                <a class="navbar-brand brand-logo" href="{{ route('landingpage') }}"
                                    style="color: aliceblue; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                    <img src="{{ url('assetsmhs/images/dashboard/bxs_graduation.png') }}"
                                        style="width:30px; height: auto; margin-right: 10px;" alt="logo" />
                                    MahasiswaLancer
                                </a>

                                <a class="navbar-brand brand-logo-mini" href="{{ route('landingpage') }}">
                                    <img src="{{ url('assetsmhs/images/dashboard/bxs_graduation.png') }}"
                                        style="width:30px; height: auto; margin-right: 10px;" alt="logo" />
                                </a>
                            </div>

                            <div class="navbar-menu-wrapper d-flex align-items-stretch">

                                <button class="c-button js-offcanvas-trigger"
                                    data-offcanvas-trigger="off-canvas-left-push">Left - Push</button>
                                <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                                    data-toggle="minimize">
                                    <span class="mdi mdi-menu"></span>
                                </button>


                                <ul class="navbar-nav navbar-nav-right">
                                    <li class="nav-item nav-profile">

                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                            <div class="d-inline p-2 "><img class="rounded-circle" width="32"
                                                    height="32" src="{{ Auth::user()->profile_photo_url }}"
                                                    alt="{{ Auth::user()->name }}" />
                                            </div>
                                            <div class="d-inline p-2 text-muted">{{ Auth::user()->name }}</div>
                                        @else
                                            <svg class="ms-2" width="18"
                                                xmlns="{{ asset('http://www.w3.org/2000/svg') }}" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            {{ Auth::user()->name }}
                                        @endif


                                    </li>
                                </ul>

                                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
                                    type="button" data-toggle="offcanvas">
                                    <span class="mdi mdi-menu"></span>
                                </button>

                            </div>

                        </nav>
                    </div>

                    <div class="row">

                        <x-jet-validation-errors class="mb-3 rounded-3" />

                        @yield('container')

                    </div>
                </div>

                <footer class="footer" style="width: 110%; margin-left: 20%;">
                    <div class="container-fluid d-flex justify-content-between">
                        <span class="text-muted" style="margin-left: 40%; padding-bottom: 1em;">Copyright ©
                            MahasiswaLancer.com
                            2022</span>
                    </div>
                </footer>
            </div>

        </div>
    </div>

    <!-- plugins:js -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

    <script src="{{ URL::asset('assetsmhs/vendors/js/vendor.bundle.base.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ URL::asset('assetsmhs/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ URL::asset('assetsmhs/js/off-canvas.js') }}"></script>
    <script src="{{ URL::asset('assetsmhs/js/hoverable-collapse.js') }}"></script>
    <script src="{{ URL::asset('assetsmhs/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ URL::asset('assetsmhs/js/dashboard.js') }}"></script>
    <script src="{{ URL::asset('assetsmhs/js/todolist.js') }}"></script>
    <script src="{{ URL::asset('https://kit.fontawesome.com/1cea8d8163.js') }}" crossorigin="anonymous"></script>
    <!-- End custom js for this page -->

    {{-- <script>
        jQuery(document).ready(function(e) {
            $('[data-toggle="minimize"]').on("click", function() {
                if ((body.hasClass('sidebar-toggle-display')) || (body.hasClass('sidebar-absolute'))) {
                    body.toggleClass('sidebar-hidden');
                } else {
                    body.toggleClass('sidebar-icon-only');
                }
            });
        });
    </script> --}}

</body>

</html>
