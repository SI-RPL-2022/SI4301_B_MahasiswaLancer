<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
  <style>
    
  </style>
  
<!--===============================================================================================-->
</head>
<body style="background-color: #F3F9F3;">
    
    <nav class="navbar navbar-expand-sm" style="background-color:#ffff; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">

        <div class="container-fluid">
            <!-- Logo -->
            <div style="padding-left: 80px;">
                <a class="navbar-brand" href="#">
                    <img src="asset-images/LOGO MAHASISWALANCER.png" alt="Avatar Logo" style="width:150px;">
                </a>
            </div>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-black" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#fitur">Fitur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#jasa">Jasa</a>
                </li>
            </ul>
            
                @auth

                <div class="hstack" style="padding-right: 30px;">
                    <img class="rounded-circle" alt="40x40"
                        src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
                        data-holder-rendered="true" style=" width: 40px;height: 40px;">
                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                            style="margin-left: 15px;">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu" style="border-radius: 10px; border-color: #DAE3DC;">
                            <li><a class="dropdown-item text-center" href="{{ route('biodata') }}">Profile</a>
                            </li>
                            <li><a class="dropdown-item text-center" href="#">Status Pengerjaan</a></li>
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
      
      </nav>

    <div class="container">
        <div class="text-center">
            <h1 style="padding-top:87px;">Status Pengerjaan</h1>
            <div class="text-center">
                <div class="card " style="border-radius: 37px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1); width: 955px; margin: 30px auto 143px auto">
                    <ul class="nav nav-pills nav-justified" style="background-color: rgb(255, 255, 255);border-radius: 37px;" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active tambahan link-dark" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                aria-controls="pills-home" aria-selected="true" style="border-radius: 37px;">Menunggu Konfirmasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                                aria-controls="pills-profile" aria-selected="false" style="border-radius: 37px;">Menunggu Pembayaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark" id="pills-waiting-tab" data-toggle="pill" href="#pills-waiting" role="tab"
                                aria-controls="pills-contact" aria-selected="false" style="border-radius: 37px;">Dalam Pengerjaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark" id="pills-end-tab" data-toggle="pill" href="#pills-end" role="tab"
                                aria-controls="pills-contact" aria-selected="false" style="border-radius: 37px;">Selesai</a>
                        </li>
                    </ul>
                    <div class="card-body"></div>
    
                        <div class="tab-content" id="pills-tabContent">
                            
                            <!--ISI DARI TAB MENUNGGU KONFIRMASI-->
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="container mt-0 px-1">
                                    <div class="d-flex justify-content-center row">
                                        <div class="col-md-15">
                                            <div class="rounded">
                                                <div class="table-responsive table-borderless">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">
                                                                    <div class="toggle-btn">
                                                                        <div class="inner-circle"></div>
                                                                    </div>
                                                                </th>
                                                                <th>ID Order</th>
                                                                <th>Jasa</th>
                                                                <th>MahasiswaLancer</th>
                                                                <th>Deadline</th>
                                                                <th>Action</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-body">
                                                            <tr class="cell-1">
                                                                <td class="text-center">
                                                                    <div class="toggle-btn">
                                                                        <div class="inner-circle"></div>
                                                                    </div>
                                                                </td>
                                                                <td>13487</td>
                                                                <td>Desain UI/UX Untuk Aplikasi E-Commerce</td>
                                                                <td>Supri</td>
                                                                <td>23-05-2023</td>
                                                                <td><span class="badge badge-success" style="background-color:rgba(233, 25, 25, 0.14); color: #ff0000">Batalkan</span></td>
    
                                                                <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                                            </tr>
                                                            <tr class="cell-1">
                                                                <td class="text-center">
                                                                    <div class="toggle-btn">
                                                                        <div class="inner-circle"></div>
                                                                    </div>
                                                                </td>
                                                                <td>13488</td>
                                                                <td>Desain Web Desain</td>
                                                                <td>Supri</td>
                                                                <td>28-05-2022</td>
                                                                <td><span class="badge badge-success" style="background-color:rgba(233, 25, 25, 0.14); color: #ff0000">Batalkan</span></td>                                                <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <!--ISI DARI TAB MENUNGGU PEMBAYARAN-->
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    
                                <div class="container mt-0 px-1">
                                    <div class="d-flex justify-content-center row">
                                        <div class="col-md-15">
                                            <div class="rounded">
                                                <div class="table-responsive table-borderless">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">
                                                                    <div class="toggle-btn">
                                                                        <div class="inner-circle"></div>
                                                                    </div>
                                                                </th>
                                                                <th>ID Order</th>
                                                                <th>Jasa</th>
                                                                <th>MahasiswaLancer</th>
                                                                <th>Deadline</th>
                                                                <th>Action</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-body">
                                                            <tr class="cell-1">
                                                                <td class="text-center">
                                                                    <div class="toggle-btn">
                                                                        <div class="inner-circle"></div>
                                                                    </div>
                                                                </td>
                                                                <td>13487</td>
                                                                <td>Desain UI/UX Untuk Aplikasi E-Commerce</td>
                                                                <td>Supri</td>
                                                                <td>23-05-2023</td>
                                                                <td><span class="badge badge-success" style="background-color:rgba(35, 170, 68, 0.13); color: #23AA44">Bayar Sekarang</span></td>
    
                                                                <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                                            </tr>
                                                            <tr class="cell-1">
                                                                <td class="text-center">
                                                                    <div class="toggle-btn">
                                                                        <div class="inner-circle"></div>
                                                                    </div>
                                                                </td>
                                                                <td>13488</td>
                                                                <td>Desain Web Desain</td>
                                                                <td>Supri</td>
                                                                <td>28-05-2022</td>
                                                                <td><span class="badge badge-success" style="background-color:rgba(35, 170, 68, 0.13); color: #23AA44">Bayar Sekarang</span></td>                                                <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    
                            </div>
    
                            <!--ISI DARI TAB DALAM PENGERJAAN-->
                            <div class="tab-pane fade" id="pills-waiting" role="tabpanel" aria-labelledby="pills-waiting-tab">
                    
                                <div class="container mt-0 px-1">
                                    <div class="d-flex justify-content-center row">
                                        <div class="col-md-15">
                                            <div class="rounded">
                                                <div class="table-responsive table-borderless">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">
                                                                    <div class="toggle-btn">
                                                                        <div class="inner-circle"></div>
                                                                    </div>
                                                                </th>
                                                                <th>ID Order</th>
                                                                <th>Jasa</th>
                                                                <th>MahasiswaLancer</th>
                                                                <th>Deadline</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-body">
                                                            <tr class="cell-1">
                                                                <td class="text-center">
                                                                    <div class="toggle-btn">
                                                                        <div class="inner-circle"></div>
                                                                    </div>
                                                                </td>
                                                                <td>13487</td>
                                                                <td>Desain UI/UX Untuk Aplikasi E-Commerce</td>
                                                                <td>Supri</td>
                                                                <td>23-05-2023</td>
                                                                <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                                            </tr>
                                                            <tr class="cell-1">
                                                                <td class="text-center">
                                                                    <div class="toggle-btn">
                                                                        <div class="inner-circle"></div>
                                                                    </div>
                                                                </td>
                                                                <td>13488</td>
                                                                <td>Desain Web Desain</td>
                                                                <td>Supri</td>
                                                                <td>28-05-2022</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    
                            </div>
    
                            <!--ISI DARI TAB SELESAI PENGERJAAN-->
                            <div class="tab-pane fade" id="pills-end" role="tabpanel" aria-labelledby="pills-end-tab">
                    
                                <div class="container mt-0 px-1">
                                    <div class="d-flex justify-content-center row">
                                        <div class="col-md-15">
                                            <div class="rounded">
                                                <div class="table-responsive table-borderless">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">
                                                                    <div class="toggle-btn">
                                                                        <div class="inner-circle"></div>
                                                                    </div>
                                                                </th>
                                                                <th>ID Order</th>
                                                                <th>Jasa</th>
                                                                <th>MahasiswaLancer</th>
                                                                <th>Deadline</th>
                                                                <th>Action</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-body">
                                                            <tr class="cell-1">
                                                                <td class="text-center">
                                                                    <div class="toggle-btn">
                                                                        <div class="inner-circle"></div>
                                                                    </div>
                                                                </td>
                                                                <td>13487</td>
                                                                <td>Desain UI/UX Untuk Aplikasi E-Commerce</td>
                                                                <td>Supri</td>
                                                                <td>23-05-2023</td>
                                                                <td><span class="badge badge-success" style="background-color:rgba(35, 170, 68, 0.13); color: #23AA44">Pesan Lagi</span></td>
    
                                                                <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                                            </tr>
                                                            <tr class="cell-1">
                                                                <td class="text-center">
                                                                    <div class="toggle-btn">
                                                                        <div class="inner-circle"></div>
                                                                    </div>
                                                                </td>
                                                                <td>13488</td>
                                                                <td>Desain Web Desain</td>
                                                                <td>Supri</td>
                                                                <td>28-05-2022</td>
                                                                <td><span class="badge badge-success" style="background-color:rgba(35, 170, 68, 0.13); color: #23AA44">Pesan Lagi</span></td>                                                <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
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
            </div>
            
          </div>
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

            
            
        

    


</body>
</html>






