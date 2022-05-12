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
    <link rel="shortcut icon" href="assetsmhs/images/faces/face10.jpg" />
  </head>

  <body>
    <div class="container-scroller">
      <!--Start Navbar-->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background-color: black;">
          <a class="navbar-brand brand-logo" href="#" style="color: aliceblue; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="assetsmhs/images/dashboard/bxs_graduation.png" style="width:30px; height: auto; margin-right: 10px;"  alt="logo" />MahasiswaLancer</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch" style="box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1);">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile">
              <a class="nav-link" id="profile" href="#" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assetsmhs/images/faces/face1.jpg" alt="image">
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Supri Prawira</p>
                </div>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- End Navbar -->

      
      <div class="container-fluid page-body-wrapper">
        <!-- Start Navbar Side -->
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
              <a class="nav-link"  href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
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
            <li class="nav-item" style="margin-top: 100%;">
              <a class="nav-link" href="#">
                <span class="menu-title">Logout</span>
                <i class="mdi mdi-logout menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Navbar Sidebar -->

        <!-- Start Content -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card" style="border-radius: 37px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1); width: 947px;">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Edit Jasa</h4>
                    <!-- Start Form Add Jasa -->
                    <div class="d-flex">
                      <form>
                        <div style="margin-left: 120px; margin-top: 50px;">
                          <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label"><b>Judul Jasa</b></label>
                            <input style="width:840px; height:43px;" type="text" class="form-control" id="judul" placeholder="Judul Jasa">
                          </div>
                          <div class="mb-4">
                            <label for="exampleInputHarga1" class="form-label"><b>Harga Jasa</b></label>
                            <input type="number" class="form-control" id="harga" placeholder="0.0">
                          </div>
                          <div class="mb-4">
                            <label for="exampleFormControlDesc1" class="form-label"><b>Deskripsi Jasa</b></label>
                            <textarea class="form-control" id="desc" placeholder="Deskripsi Jasa" style="height:268px;"></textarea>
                          </div>
                          <div class="mb-5">
                            <label for="exampleFormControlDesc1" class="form-label"><b>Gambar Jasa</b></label>
                            <div class="card-group">
                              <div>
                                <div id="rectangle" style="position: absolute; left: 160px; top: 740px;"></div>
                                <img src="assetsmhs/images/dashboard/image 45.png" class="card-img-top" alt="..."><p style="position: absolute; left: 190px; top: 745px; color:whitesmoke;">Foto Utama</p>
                              </div>
                              <div style="margin-left: 30px;">
                                <img src="assetsmhs/images/dashboard/image 46.png" class="card-img-top" alt="...">
                              </div>
                              <div style="margin-left: 30px;">
                                <img src="assetsmhs/images/dashboard/image 51.png" class="card-img-top" alt="...">
                              </div>
                              <div style="margin-left: 30px;">
                                <a href="#"><button style="color:whitesmoke; width: 133.85px; height: 99.26px; border-radius: 27.637px; background: #151E17;">+ </br>Tambah</br> Gambar</button></a>
                              </div>
                            </div>
                          </div>
                          <div class="mb-4">
                            <div class="image_upload">
                              <p>
                                <b>Lampirkan Link File Pendukung (Opsional)</b>
                              </p>
                              <label for="file1" style="margin-top: -100px;">
                                <a class="btn" rel="nofollow" style="color:whitesmoke; width: 145px; height: 43px; background: #686962; border-radius: 7px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><i class="fas fa-link"></i> Link File</a>
                              </label>
                              <input type="file" name="file1" id="file1" hidden>
                            </div>
                            <div id="rectangle2"></div>
                          </div>
                          <button type="submit" class="btn" style="margin-top: 30px; margin-left: 300px;  width: 255px; height: 48px; background: #151E17; border-radius: 33px; color:whitesmoke; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Simpan</button>
                        </div>
                      </form>
                    </div>
                    <!-- End Form Add Jasa -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Content -->
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