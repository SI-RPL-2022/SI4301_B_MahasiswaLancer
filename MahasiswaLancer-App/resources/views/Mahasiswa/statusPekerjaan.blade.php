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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assetsmhs/images/faces/face10.jpg" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background-color: black;">
          <a class="navbar-brand brand-logo" href="#" style="color: aliceblue; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="assetsmhs/images/dashboard/bxs_graduation.png" style="width:30px; height: auto; margin-right: 10px;"  alt="logo" />MahasiswaLancer</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile">
              <a class="nav-link" id="profile" href="#" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assetsmhs/images/faces/face1.jpg" alt="image">
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><b>Supri Prawira</b></p>
                </div>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Pesanan</span>
                <i class="mdi mdi-clipboard-text menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="statusPekerjaan.html" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Status Pekerjaan</span>
                <i class="mdi mdi-comment menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Biodata</span>
                <i class="mdi mdi-account-edit menu-icon"></i>
              </a>
            </li>
            <li class="nav-item" style="margin-top: 100%;">
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
                    <h4 class="card-title">Status Pekerjaan</h4><br>
                    <div class="d-flex">
                      <table class="table table-borderless">
                        <thead>
                          <tr>
                            <th scope="col">ID Order</th>
                            <th scope="col">Jasa</th>
                            <th scope="col">Client</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">2817</th>
                            <td>Desain UI/IX Aplikasi E-Commerce</td>
                            <td>Supri Prawira</td>
                            <td>22-04-2022</td>
                            <td><span class="badge rounded-pill bg-warning">Menunggu Pembayaran</span></td>
                          </tr>
                          <tr>
                              <th scope="row">2345</th>
                              <td>Code Front End Website Pribadi</td>
                              <td>Alpiyan Irawan</td>
                              <td>11-02-2022</td>
                              <td><span class="badge rounded-pill bg-danger">Project Selesai</span></td>
                          </tr>
                          <tr>
                            <th scope="row">2434</th>
                            <td>Desain User Interface Website</td>
                            <td>Dinda Romlah</td>
                            <td>16-06-2022</td>
                            <td>
                              <div class="dropdown">
                                <a class="btn dropdown-toggle badge rounded-pill bg-success" type="button" data-toggle="dropdown">On Progress</a>
                                <ul class="btn dropdown-menu">            
                                  <li><a href="#" style="color: black; margin-left: 20px;">Project Selesai</a></li>
                                  <li class="divider"></li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="footer" style="width: 110%; margin-left: 20%;">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted" style="margin-left: 450px;">Copyright © MahasiswaLancer 2022</span>
            </div>
          </footer>
        </div>
      </div>
    </div>

    <!-- plugins:js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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