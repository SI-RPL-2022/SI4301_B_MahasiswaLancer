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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assetsmhs/images/dashboard/bxs_graduation1.png" />


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin5">
          <nav class="navbar top-navbar navbar-expand-md" style="color: #233e99">
            <div class="navbar-header" data-logobg="skin6">
        
              <a class="navbar-brand" href="/">
                
                <b class="logo-icon">
                  
                  <img src="{{ url('dashboard_assets/img/Logo.png') }}" alt="homepage" style="width: 200px" />
                </b>
                
              </a>
        
              <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-close ti-menu text-white" aria-hidden="true"></i></a>
            </div>
      
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5" style="padding-right: 2%">
        
              <div class="navbar-nav ms-auto d-flex align-items-center">
                {{-- @role('admin')
                  <h4 class="dropdown-header small text-muted">
                    Admin
                  </h4>
                @endrole --}}
                  @auth
                      <x-jet-dropdown id="settingsDropdown">
                          <x-slot name="trigger">
                              @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                              <div class="d-inline p-2 text-muted">{{ Auth::user()->name }}</div>
                              <div class="d-inline p-2 "><img class="rounded-circle" width="32" height="32" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /></div>
                              @else
                                
                                {{ Auth::user()->name }}
  
                                <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                              @endif
                          </x-slot>
  
                          <x-slot name="content">
  
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
  
                              {{-- @role('user')
                              <x-jet-dropdown-link href="/kegiatan">
                                  {{ __('Activity') }}
                              </x-jet-dropdown-link>
                              @endrole --}}
  
                              <hr class="dropdown-divider">
  
                              <div>
                              <x-jet-dropdown-link href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
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
                  </div>
            </div>
          </nav>
        </header>
  
        <aside class="left-sidebar" data-sidebarbg="skin6">
          
          <div class="scroll-sidebar">
            
            {{-- <nav class="sidebar-nav">
              <ul id="sidebarnav">
                
                <li class="sidebar-item pt-2">
                  
                  @role('user')
                  <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false" href="/dashboard">
                  @endrole
  
                  @role('admin')
                  <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false" href="/admin-dashboard">
                  @endrole
  
                    <i class="far fa-clock text-white" aria-hidden="true"></i>
                    <span class="hide-menu text-white">Dashboard</span>
                  </a>
                </li>
  
                <li class="sidebar-item">
                  @role('user')
                  <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle text-white" aria-expanded="false" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black">
                    <i class="fa fa-user-md text-white" aria-hidden="true"></i>
                    <span class="hide-menu text-white">Konsultasi</span>
                  </a>
                  <ul class="dropdown-menu mx-5" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item-text text-white" href="/kegiatan-aktif" style="padding-left: 30px">Konsultasi</a></li>
                    <li><a class="dropdown-item-text text-white" href="/pilih-psikolog" style="padding-left: 30px">Tambah Konsultasi</a></li>
                  </ul>
                  @endrole
  
                  @role('admin')
                  <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle text-white" aria-expanded="false" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black">
                    <i class="fa fa-users text-white" aria-hidden="true"></i>
                    Psikolog Zyon
                  </a>
                  <ul class="dropdown-menu mx-5" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item-text text-white" href="/psikolog-list" style="padding-left: 30px">Psikolog</a></li>
                    <li><a class="dropdown-item-text text-white" href="/tambah-psikolog" style="padding-left: 30px">Tambah Psikolog</a></li>
                  </ul>
                  @endrole
                </li>
  
                <li class="sidebar-item">
                  @role('user')
                  <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false" href="/riwayat-transaksi">
                    <i class="fa fa-credit-card text-white" aria-hidden="true"></i>
                    <span class="hide-menu text-white">Transaksi</span>
                  </a>
                  @endrole
  
                  @role('admin')
                  <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false" href="/konsultasi">
                    <i class="fa fa-tasks text-white" aria-hidden="true"></i>
                    <span class="hide-menu text-white">Konsultasi</span>
                  </a>
                  @endrole
                </li>
  
                @role('admin')
                <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false" href="/transaksi">
                    <i class="fa fa-credit-card text-white" aria-hidden="true"></i>
                    <span class="hide-menu text-white">Transaksi</span>
                  </a>
                  
                </li>
                @endrole
  
                @role('admin')
                <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false" href="/metode-pembayaran">
                    <i class="fa fa-credit-card text-white" aria-hidden="true"></i>
                    <span class="hide-menu text-white">Metode Pembayaran</span>
                  </a>
                </li>
                @endrole
              </ul>
            </nav> --}}
            
          </div>
          
        </aside>
  
        <div class="page-wrapper">
          <x-jet-validation-errors class="mb-3 rounded-3" />
  
          {{-- @yield('container') --}}
  
          <footer class="footer text-center">2021 © Zyon</footer>
    
        </div>
  
      </div>

    <div class="container-scroller">
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
                style="background-color: black;">
                <a class="navbar-brand brand-logo" href="#"
                    style="color: aliceblue; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img
                        src="assetsmhs/images/dashboard/bxs_graduation.png"
                        style="width:30px; height: auto; margin-right: 10px;" alt="logo" />MahasiswaLancer</a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch"
                style="box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1);">
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile">
                        <a class="nav-link" id="profile" href="#" aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="assetsmhs/images/faces/face1.jpg" alt="image">
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">Darma Putra</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
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
                        <x-app-layout>
                            @livewire('profile.update-profile-information-form')
                        {{-- @if (Laravel\Fortify\Features::canUpdateProfileInformation()) --}}
                        <x-slot name="header">
                            <h2 class="h4 font-weight-bold">
                                {{ __('Profile') }}
                            </h2>
                        </x-slot>
                            {{-- @livewire('profile.update-profile-information-form') --}}

                            {{-- <x-jet-section-border /> --}}
                        {{-- @endif --}}
                        </x-app-layout>
                        {{-- <div class="col-12 grid-margin">
                            <div class="card"
                                style="border-radius: 37px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1); width: 947px; margin-top: 124px; margin-left:112px;">
                                <div class="card-body">
                                    <img src="assetsmhs/images/faces/face27.jpg" alt="..."
                                        style="border-radius: 50%; margin-left: 38%; width:180px; height: auto; margin-top:-135px;">
                                    <a class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="position: absolute; left: 408px; top: 100px;">Edit Photo</a>
                                    
                                    
                                    <div class="d-flex">

                                        <form>
                                            <div style="margin-left: 75px; margin-top: 90px;">
                                                <div class="mb-4">
                                                    <label for="exampleInputNama1" class="form-label"><b>Nama
                                                            Lengkap</b></label>
                                                    <input style="width:740px; height:43px; border-radius: 6px;" type="text"
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
                        </div> --}}
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
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
