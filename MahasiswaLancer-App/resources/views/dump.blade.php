<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MahasiswaLancer</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assetsmhs/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assetsmhs/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assetsmhs/css/style.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assetsmhs/images/dashboard/bxs_graduation1.png" />
</head>

<body>
    <div class="container-scroller">
        

        <div class="container-fluid page-body-wrapper">

            <nav class="sidebar sidebar-offcanvas" style="height: 100%" id="sidebar">

                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Dasboard.html">
                            <span class="menu-title">Dashboard</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pesanan.html">
                            <span class="menu-title">Pesanan</span>
                            <i class="mdi mdi-clipboard-text menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <span class="menu-title">Status Pengerjaan</span>
                            <i class="mdi mdi-comment menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="biodata.html">
                            <span class="menu-title">Biodata</span>
                            <i class="mdi mdi-account-edit menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" style="margin-top: 140%;">
                        <a class="nav-link" href="#">
                            <span class="menu-title">Logout</span>
                            <i class="mdi mdi-logout menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
                                style="background-color: black;">
                                <a class="navbar-brand brand-logo" href="#"
                                    style="color: aliceblue; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                    <img src="assetsmhs/images/dashboard/bxs_graduation.png"
                                        style="width:30px; height: auto; margin-right: 10px;" alt="logo" />
                                    MahasiswaLancer
                                </a>
                
                                <a class="navbar-brand brand-logo-mini" href="index.html">
                                    <img src="assetsmhs/images/dashboard/bxs_graduation.png"
                                        style="width:30px; height: auto; margin-right: 10px;" alt="logo" />
                                </a>
                            </div>
                
                            <div class="navbar-menu-wrapper d-flex align-items-stretch"
                                style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
                
                                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                                    <span class="mdi mdi-menu"></span>
                                </button>
                
                                <ul class="navbar-nav navbar-nav-right">
                                    <li class="nav-item nav-profile">
                
                                        @auth
                                            <x-jet-dropdown id="settingsDropdown">
                                                <x-slot name="trigger">
                                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                        <div class="d-inline p-2 "><img class="rounded-circle" width="32" height="32"
                                                                src="{{ Auth::user()->profile_photo_url }}"
                                                                alt="{{ Auth::user()->name }}" /></div>
                                                        <div class="d-inline p-2 text-muted">{{ Auth::user()->name }}</div>
                                                    @else
                                                        <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        {{ Auth::user()->name }}
                                                    @endif
                                                </x-slot>
                
                                                <x-slot name="content" style="margin-top: 30px">
                
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
                
                                                    <div>
                                                        <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                               document.getElementById('logout-form').submit();">
                                                            {{ __('Log out') }}
                                                        </x-jet-dropdown-link>
                                                    </div>
                                                    <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                                        @csrf
                                                    </form>
                                                </x-slot>
                                            </x-jet-dropdown>
                                        @endauth
                
                                    </li>
                                </ul>
                
                            </div>
                
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card"
                                style="border-radius: 37px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1); width: 947px;">
                                <div class="card-body">
                                    <img src="assetsmhs/images/faces/face27.jpg" alt="..."
                                        style="border-radius: 50%; margin-left: 40%; width:180px; height: auto;">
                                    <a style="position: absolute; left: 525px; top: 230px;">Edit Photo</a>
                                    <div class="d-flex">
                                        <form>
                                            <div style="margin-left: 120px; margin-top: 65px; padding-bottom: 150px;">
                                                <div class="mb-4">
                                                    <label for="exampleInputNama1" class="form-label"><b>Nama
                                                            Lengkap</b></label>
                                                    <input style="width:840px; height:43px;" type="text"
                                                        class="form-control" id="exampleInputNama1"
                                                        placeholder="Nama Lengkap">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="exampleInputEmail1"
                                                        class="form-label"><b>Email</b></label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        placeholder="Email">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="exampleInputNoHP1" class="form-label"><b>No
                                                            Hp</b></label>
                                                    <input type="email" class="form-control" id="exampleInputNoHP1"
                                                        placeholder="No Hp">
                                                </div>
                                                <div class="mb-5">
                                                    <label for="exampleFormControlDesB1"
                                                        class="form-label"><b>Deskripsi Biodata</b></label>
                                                    <textarea class="form-control" id="exampleFormControlDesB1" placeholder="Deskripsi Biodata"
                                                        style="height:271px;"></textarea>
                                                </div>
                                                <button type="submit" class="btn"
                                                    style="width: 176px; height: 48px; background: #151E17; border-radius: 33px; color:whitesmoke;">Simpan</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer" style="width: 110%; margin-left: 20%;">
                    <div class="container-fluid d-flex justify-content-between">
                        <span class="text-muted" style="margin-left: 500px;">Copyright © MahasiswaLancer.com
                            2022</span>
                    </div>
                </footer>
            </div>

        </div>
    </div>

    <!-- plugins:js -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
    <script src="assetsmhs/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assetsmhs/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assetsmhs/js/off-canvas.js"></script>
    <script src="assetsmhs/js/hoverable-collapse.js"></script>
    <script src="assetsmhs/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assetsmhs/js/dashboard.js"></script>
    <script src="assetsmhs/js/todolist.js"></script>
    <script src="https://kit.fontawesome.com/1cea8d8163.js" crossorigin="anonymous"></script>
    <!-- End custom js for this page -->
</body>

</html>