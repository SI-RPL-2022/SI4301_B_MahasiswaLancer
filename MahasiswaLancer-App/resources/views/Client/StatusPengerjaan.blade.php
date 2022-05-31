@extends('Client.layout.index')

@section('container')
    <div class="container">
        <div class="text-center">
            <h1 style="padding-top:87px;">Status Pengerjaan</h1>
            <div class="text-center">
                <div class="card "
                    style="border-radius: 37px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1); width: 955px; margin: 30px auto 143px auto">
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
                                role="tab" aria-controls="pills-contact" aria-selected="false"
                                style="border-radius: 37px;">Dalam Pengerjaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark" id="pills-end-tab" data-toggle="pill" href="#pills-end" role="tab"
                                aria-controls="pills-contact" aria-selected="false" style="border-radius: 37px;">Selesai</a>
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
                                                                    data-bs-target="#staticBackdrop1">Batalkan</span></td>

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
                                                                    data-bs-target="#staticBackdrop1">Batalkan</span></td>
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
                                                                    style="background-color:rgba(35, 170, 68, 0.13); color: #23AA44">Bayar
                                                                    Sekarang</span></td>

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
                                                                    style="background-color:rgba(35, 170, 68, 0.13); color: #23AA44">Bayar
                                                                    Sekarang</span></td>
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
                                                            <td><span class="badge badge-success"
                                                                    style="background-color:rgba(35, 170, 68, 0.13); color: #23AA44">Pesan
                                                                    Lagi</span></td>

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
                                                                    style="background-color:rgba(35, 170, 68, 0.13); color: #23AA44">Pesan
                                                                    Lagi</span></td>
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
@endsection
