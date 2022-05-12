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
  </head>

  <body>
    <div class="container-scroller">
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1);">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background-color: black;">
          <a class="navbar-brand brand-logo" href="#" style="color: aliceblue; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="assetsmhs/images/dashboard/bxs_graduation.png" style="width:30px; height: auto; margin-right: 10px;"  alt="logo" />MahasiswaLancer</a>
          <a class="navbar-brand brand-logo-mini" href="#"><img src="assetsmhs/images/dashboard/bxs_graduation.png" alt="logo" /></a>
        </div>
        @auth
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile">
              <a class="nav-link" id="profile" href="#" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assetsmhs/images/faces/face1.jpg" alt="image">
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">{{ Auth::user()->name }}</p>
                </div>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        @endauth

      </nav>

      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dasboardmhs') }}">
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
              <a class="nav-link"  href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
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
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Jasa</h2 >
                    <a href="AddJasa.html" ><button type="button" class="btn" style="position: absolute; color: #BA181B; left: 80%; top: 32px; background:rgba(186, 24, 27, 0.12); ">+ Tambah Jasa</button></a>
                    <div class="d-flex">
                      <table class="table table-borderless" style="margin-top: 40px;">
                        <tbody>
                          <tr>
                            <th></th>
                            <th width="800px"></th>
                            <th width="100px"></th>
                          </tr>
                          <tr>
                            <td><img src="assetsmhs/images/dashboard/image 50.png" style=" width:200px; height: auto; padding-bottom: 50px;"></td>
                            <td><a><b>Deskripsi Detail Jasa 1</b></a>
                              <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras dictumst ac tortor aliquam faucibus mattis egestas.consectetur adipiscing elit. Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras dictumst ac tortor aliquam faucibus mattis egestas.consectetur adipiscing elit. Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras dictumst ac tortor aliquam faucibus mattis egestas.consectetur adipiscing elit. Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras dictumst ac tortor aliquam faucibus mattis egestas.</p></td>
                            <td><a href="#" style="margin-right: 10px;"> 
                              <span style="color: green;">
                                <i class="fas fa-pen-to-square"></i>
                              </span>
                            </a><a href="#" >
                              <span style="color: red;">
                                <i class="fas fa-trash-can"></i>
                              </span>
                            </a></td>
                          </tr>
                          <tr>
                            <td><img src="assetsmhs/images/dashboard/image 50.png" style="width:200px; height: auto; padding-bottom: 50px;"></td>
                            <td><a><b>Deskripsi Detail Jasa 2</b></a>
                              <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras dictumst ac tortor aliquam faucibus mattis egestas.consectetur adipiscing elit. Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras dictumst ac tortor aliquam faucibus mattis egestas.consectetur adipiscing elit. Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras dictumst ac tortor aliquam faucibus mattis egestas.consectetur adipiscing elit. Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras dictumst ac tortor aliquam faucibus mattis egestas.</p></td>
                            <td><a href="#" style="margin-right: 10px;">
                              <span style="color: green;" >
                                <i class="fas fa-pen-to-square"></i>
                              </span>
                            </a><a href="#">
                              <span style="color: red;">
                                <i class="fas fa-trash-can"></i>
                              </span>
                            </a></td>
                          </tr>
                          <tr>
                            <td><img src="assetsmhs/images/dashboard/image 50.png" style="width:200px; height: auto; padding-bottom: 50px;"></td>
                            <td><a><b>Deskripsi Detail Jasa 3</b></a>
                              <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras dictumst ac tortor aliquam faucibus mattis egestas.consectetur adipiscing elit. Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras dictumst ac tortor aliquam faucibus mattis egestas.consectetur adipiscing elit. Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras dictumst ac tortor aliquam faucibus mattis egestas.consectetur adipiscing elit. Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras dictumst ac tortor aliquam faucibus mattis egestas.</p></td>
                            <td><a href="#" style="margin-right: 10px;">
                              <span style="color: green;">
                                <i class="fas fa-pen-to-square"></i>
                              </span>
                            </a><a href="#">
                              <span style="color: red;">
                                <i class="fas fa-trash-can"></i>
                              </span>
                            </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- plugins:js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assetsmhs/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assetsmhs/vendors/chart.js/Chart.min.js"></script>
    <script src="assetsmhs/js/jquery.cookie.js" type="text/javascript"></script>
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