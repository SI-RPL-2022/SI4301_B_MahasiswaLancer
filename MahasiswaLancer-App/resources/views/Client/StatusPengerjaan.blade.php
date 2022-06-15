@extends('Client.layout.index')

@section('container')
    <div class="container">
        <div class="text-center">
            <h1 style="padding-top:87px;">Status Pengerjaan</h1><br>
            <div class="text-center">
                <div class="card "
                    style="border-radius: 37px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1); width: 1050px; margin: 30px auto 143px auto">
                    <ul class="nav nav-pills nav-justified" style="background-color: rgb(255, 255, 255);border-radius: 37px;"
                        id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active tambahan link-dark" id="pills-home-tab" data-toggle="pill"
                                href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"
                                style="border-radius: 37px;">Menunggu Konfirmasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false"
                                style="border-radius: 37px;">Menunggu Pembayaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark" id="pills-waiting-tab" data-toggle="pill" href="#pills-waiting"
                                role="tab" aria-controls="pills-waiting" aria-selected="false"
                                style="border-radius: 37px;">Dalam Pengerjaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark" id="pills-result-tab" data-toggle="pill" href="#pills-result"
                                role="tab" aria-controls="pills-result" aria-selected="false"
                                style="border-radius: 37px;">Konfirmasi Hasil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark" id="pills-end-tab" data-toggle="pill" href="#pills-end" role="tab"
                                aria-controls="pills-end" aria-selected="false" style="border-radius: 37px;">Selesai</a>
                        </li>
                    </ul>
                    <div class="card-body"></div>

                    <div class="tab-content" id="pills-tabContent">

                        <!--ISI DARI TAB MENUNGGU KONFIRMASI-->
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
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
                                                            <td><span class="badge badge-success"
                                                                    style="background-color:rgba(233, 25, 25, 0.14); color: #ff0000"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                                    </svg>Batalkan</span></td>

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
                                                            <td><span class="badge badge-success"
                                                                    style="background-color:rgba(233, 25, 25, 0.14); color: #ff0000"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                                    </svg>Batalkan</span></td>
                                                            <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
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
                                                            <td><span class="badge badge-success"
                                                                    style="background-color:rgba(35, 170, 68, 0.13); color: #23AA44"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                                                                    <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
                                                                    </svg>&nbsp;Bayar Sekarang</span></td>

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
                                                            <td><span class="badge badge-success"
                                                                    style="background-color:rgba(35, 170, 68, 0.13); color: #23AA44"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                                                                    <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
                                                                    </svg>&nbsp;Bayar Sekarang</span></td>
                                                            <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
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

                        <!--ISI DARI TAB KONFIRMASI HASIL-->
                        <div class="tab-pane fade" id="pills-result" role="tabpanel" aria-labelledby="pills-result-tab">

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
                                                            <td><span class="badge badge-success"
                                                                    style="background-color:rgba(255, 255, 255, 1); color: #000000" data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop2"><u>Lihat Hasil</u></span></td>
                                                            <td><span class="badge badge-success"
                                                                    style="background-color:rgba(233, 25, 25, 0.14); color: #ff0000"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                                    </svg>Revisi</span></td>
                                                            <td><span class="badge badge-success"
                                                                    style="background-color:rgba(35, 170, 68, 0.13); color: #23AA44"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                                                    </svg>Terima</span></td>

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
                                                            <td><span class="badge badge-success"
                                                                    style="background-color:rgba(255, 255, 255, 1); color: #000000" data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop2"><u>Lihat Hasil</u></span></td>
                                                            <td><span class="badge badge-success"
                                                                    style="background-color:rgba(233, 25, 25, 0.14); color: #ff0000"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                                    </svg>Revisi</span></td>
                                                            <td><span class="badge badge-success"
                                                                    style="background-color:rgba(35, 170, 68, 0.13); color: #23AA44"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                                                    </svg>Terima</span></td>
                                                            <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
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
                                                            <th>Ket</th>
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
                                                            <td><span class="badge badge-success"
                                                                    style="background-color:rgba(255, 228, 196, 1 ); color: #d2691e"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                                                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                                                    </svg>Pesan Lagi</span></td>
                                                            <td class="text-success"><b>Selesai</b></td>
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
                                                            <td><span class="badge badge-success"
                                                                    style="background-color:rgba(255, 228, 196, 1 ); color: #d2691e"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                                                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                                                    </svg>Pesan Lagi</span></td>
                                                            <td class="text-danger"><b>Ditolak</b></td>        
                                                            <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
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

    <!-- Batalkan Pesanan -->
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboa rd="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="staticBackdropLabel" style="margin-left:33%;">Batalkan
                        Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="text-align: center;">
                    Apakah Anda yakin ingin membatalkan <br>
                    <a>pesanan ini?</a>
                    <br /><br /><br />
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn"
                        style="margin-left:-500px; display: flex; flex-direction: row; justify-content: center; align-items: center; border: 1px solid #000000; box-sizing: border-box; border-radius: 10px; width: 219px; height: 60px;"
                        data-bs-dismiss="modal">Urungkan</button>
                    <a class="btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                        style="display: flex; flex-direction: row; justify-content: center; align-items: center; width: 219px; background: #121814; border-radius: 10px; color: whitesmoke; height: 60px; ">Batalkan
                        Pesanan</a>
                    <form method="POST" id="logout-form" action="{{ route('logout') }}">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Lihat Hasil -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboa rd="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="staticBackdropLabel" style="margin-left:40%;"><b>Lihat Hasil</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="text-align: center;">
                    Berikut merupakan link hasil pengerjaan
                    <br /><br /><br />
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
                        </svg>&nbsp;Copy</span>
                        <input type="text" class="form-control" placeholder="https://drive.google.com/drive/folders/1f-yxMG8YlyjLQKeaN" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
