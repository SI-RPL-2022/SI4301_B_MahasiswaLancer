@extends('Mahasiswa.layout.index')

@section('container')
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 37px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1);">
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
                            @foreach ($rekap as $rekap_each)
                                @if ($rekap_each['status_pesanan'] == 'Dalam Pengerjaan')
                                    <tr>
                                        <th scope="row">{{ $rekap_each['order_id'] }}</th>
                                        <td>{{ $rekap_each['jasa'] }}</td>
                                        <td>{{ $rekap_each['client'] }}</td>
                                        @if ($rekap_each['status_pesanan'] == 'Ditolak')
                                            <td>-</td>
                                        @else
                                            <td>{{ $rekap_each['deadline'] }}</td>
                                        @endif
                                        <td>
                                            @if ($rekap_each['status_pesanan'] == 'Konfirmasi Hasil')
                                                <span class="badge badge-warning"
                                                    style="background-color:rgba(255, 239, 213, 1); color: #ffa500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                    </svg><b>&nbsp;&nbsp;Menunggu Konfirmasi Hasil</b>
                                                </span>
                                            @elseif ($rekap_each['status_pesanan'] == 'Menunggu Pembayaran')
                                                <span class="badge badge-warning"
                                                    style="background-color:rgba(255, 239, 213, 1); color: #ffa500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                    </svg><b>&nbsp;&nbsp;Menunggu Pembayaran</b>
                                                </span>
                                            @elseif ($rekap_each['status_pesanan'] == 'Dalam Pengerjaan')
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle badge badge-success"
                                                        style="width: 158px; background-color:rgba(34, 139, 34, 0.25); color: #3cb371"
                                                        type="button" data-toggle="dropdown"><svg
                                                            style="margin-left: -24px;" xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-journal-text" viewBox="0 0 16 16">
                                                            <path
                                                                d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                                            <path
                                                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                                            <path
                                                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                                        </svg>
                                                        <font size="2">&nbsp;&nbsp;On Progress</font>
                                                    </button>
                                                    <ul class="btn dropdown-menu" data-bs-toggle="modal"
                                                        data-bs-target="#staticBackdrop{{ $rekap_each['order_id'] }}"
                                                        style="width: 50px; height: 32px; margin-top: 1.5px; background-color:rgba(34, 139, 34, 0.25);">
                                                        <li style="color: #3cb371; margin-left: 10px; margin-top: -5px;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                            </svg>
                                                            <font size="2">&nbsp;&nbsp;Kirim Hasil</font>
                                                        </li>
                                                        <li class="divider"></li>
                                                    </ul>
                                                </div>
                                            @elseif ($rekap_each['status_pesanan'] == 'Selesai')
                                                <span class="badge badge-danger"
                                                    style="background-color:rgba(233, 25, 25, 0.14); color: #ff0000">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001" />
                                                    </svg><b>&nbsp;&nbsp;Project Selesai</b>
                                                </span>
                                            @elseif ($rekap_each['status_pesanan'] == 'Ditolak')
                                                <span class="badge badge-danger"
                                                    style="background-color:rgba(233, 25, 25, 0.14); color: #ff0000">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001" />
                                                    </svg><b>&nbsp;&nbsp;Project Ditolak</b>
                                                </span>
                                            @endif

                                        </td>
                                    </tr>
                                @endif

                                <!-- Modal Kirim Hasil -->
                                <div class="modal fade" id="staticBackdrop{{ $rekap_each['order_id'] }}"
                                    data-bs-backdrop="static" data-bs-keyboa rd="false" tabindex="-1"
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form method="POST" action="{{ route('uploadhasilkerjaan') }}">
                                                @csrf
                                                <input name="id" value="{{ $rekap_each['order_id'] }}" hidden>
                                                <div class="modal-header border-0">
                                                    <h5 class="modal-title" id="staticBackdropLabel"
                                                        style="margin-left:40%;">Kirim Hasil</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" style="text-align: center;">
                                                    Masukkan link hasil pengerjaan project kepada client!
                                                    <br /><br /><br />
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon3">
                                                            <i class="fa fa-link" aria-hidden="true"></i>
                                                        </span>
                                                        <input name="link_pengerjaan" type="url" class="form-control"
                                                            placeholder="Masukkan Link Pengerjaan" id="basic-url"
                                                            aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="modal-footer border-0">
                                                    <button class="btn" type="submit"
                                                        style="display: flex; flex-direction: row; justify-content: center; align-items: center; width: 150px; background: #121814; border-radius: 10px; color: whitesmoke; height: 40px; ">Kirim</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @foreach ($rekap as $rekap_each)
                                @if ($rekap_each['status_pesanan'] != 'Ditolak' && $rekap_each['status_pesanan'] != 'Selesai' && $rekap_each['status_pesanan'] != 'Dalam Pengerjaan')
                                    <tr>
                                        <th scope="row">{{ $rekap_each['order_id'] }}</th>
                                        <td>{{ $rekap_each['jasa'] }}</td>
                                        <td>{{ $rekap_each['client'] }}</td>
                                        @if ($rekap_each['status_pesanan'] == 'Ditolak')
                                            <td>-</td>
                                        @else
                                            <td>{{ $rekap_each['deadline'] }}</td>
                                        @endif
                                        <td>
                                            @if ($rekap_each['status_pesanan'] == 'Konfirmasi Hasil')
                                                <span class="badge badge-warning"
                                                    style="background-color:rgba(255, 239, 213, 1); color: #ffa500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                    </svg><b>&nbsp;&nbsp;Menunggu Konfirmasi Hasil</b>
                                                </span>
                                            @elseif ($rekap_each['status_pesanan'] == 'Menunggu Pembayaran')
                                                <span class="badge badge-warning"
                                                    style="background-color:rgba(255, 239, 213, 1); color: #ffa500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                    </svg><b>&nbsp;&nbsp;Menunggu Pembayaran</b>
                                                </span>
                                            @elseif ($rekap_each['status_pesanan'] == 'Dalam Pengerjaan')
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle badge badge-success"
                                                        style="width: 158px; background-color:rgba(34, 139, 34, 0.25); color: #3cb371"
                                                        type="button" data-toggle="dropdown"><svg
                                                            style="margin-left: -24px;" xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-journal-text" viewBox="0 0 16 16">
                                                            <path
                                                                d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                                            <path
                                                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                                            <path
                                                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                                        </svg>
                                                        <font size="2">&nbsp;&nbsp;On Progress</font>
                                                    </button>
                                                    <ul class="btn dropdown-menu" data-bs-toggle="modal"
                                                        data-bs-target="#staticBackdrop{{ $rekap_each['order_id'] }}"
                                                        style="width: 50px; height: 32px; margin-top: 1.5px; background-color:rgba(34, 139, 34, 0.25);">
                                                        <li style="color: #3cb371; margin-left: 10px; margin-top: -5px;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                            </svg>
                                                            <font size="2">&nbsp;&nbsp;Kirim Hasil</font>
                                                        </li>
                                                        <li class="divider"></li>
                                                    </ul>
                                                </div>
                                            @elseif ($rekap_each['status_pesanan'] == 'Selesai')
                                                <span class="badge badge-danger"
                                                    style="background-color:rgba(233, 25, 25, 0.14); color: #ff0000">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001" />
                                                    </svg><b>&nbsp;&nbsp;Project Selesai</b>
                                                </span>
                                            @elseif ($rekap_each['status_pesanan'] == 'Ditolak')
                                                <span class="badge badge-danger"
                                                    style="background-color:rgba(233, 25, 25, 0.14); color: #ff0000">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001" />
                                                    </svg><b>&nbsp;&nbsp;Project Ditolak</b>
                                                </span>
                                            @endif

                                        </td>
                                    </tr>
                                @endif

                                <!-- Modal Kirim Hasil -->
                                <div class="modal fade" id="staticBackdrop{{ $rekap_each['order_id'] }}"
                                    data-bs-backdrop="static" data-bs-keyboa rd="false" tabindex="-1"
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form method="POST" action="{{ route('uploadhasilkerjaan') }}">
                                                @csrf
                                                <input name="id" value="{{ $rekap_each['order_id'] }}" hidden>
                                                <div class="modal-header border-0">
                                                    <h5 class="modal-title" id="staticBackdropLabel"
                                                        style="margin-left:40%;">Kirim Hasil</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" style="text-align: center;">
                                                    Masukkan link hasil pengerjaan project kepada client!
                                                    <br /><br /><br />
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon3">
                                                            <i class="fa fa-link" aria-hidden="true"></i>
                                                        </span>
                                                        <input name="link_pengerjaan" type="url" class="form-control"
                                                            placeholder="Masukkan Link Pengerjaan" id="basic-url"
                                                            aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="modal-footer border-0">
                                                    <button class="btn" type="submit"
                                                        style="display: flex; flex-direction: row; justify-content: center; align-items: center; width: 150px; background: #121814; border-radius: 10px; color: whitesmoke; height: 40px; ">Kirim</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            @foreach ($rekap as $rekap_each)
                                @if ($rekap_each['status_pesanan'] == 'Ditolak' || $rekap_each['status_pesanan'] == 'Selesai')
                                    <tr>
                                        <th scope="row">{{ $rekap_each['order_id'] }}</th>
                                        <td>{{ $rekap_each['jasa'] }}</td>
                                        <td>{{ $rekap_each['client'] }}</td>
                                        @if ($rekap_each['status_pesanan'] == 'Ditolak')
                                            <td>-</td>
                                        @else
                                            <td>{{ $rekap_each['deadline'] }}</td>
                                        @endif
                                        <td>
                                            @if ($rekap_each['status_pesanan'] == 'Konfirmasi Hasil')
                                                <span class="badge badge-warning"
                                                    style="background-color:rgba(255, 239, 213, 1); color: #ffa500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                    </svg><b>&nbsp;&nbsp;Menunggu Konfirmasi Hasil</b>
                                                </span>
                                            @elseif ($rekap_each['status_pesanan'] == 'Menunggu Pembayaran')
                                                <span class="badge badge-warning"
                                                    style="background-color:rgba(255, 239, 213, 1); color: #ffa500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                    </svg><b>&nbsp;&nbsp;Menunggu Pembayaran</b>
                                                </span>
                                            @elseif ($rekap_each['status_pesanan'] == 'Dalam Pengerjaan')
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle badge badge-success"
                                                        style="width: 158px; background-color:rgba(34, 139, 34, 0.25); color: #3cb371"
                                                        type="button" data-toggle="dropdown"><svg
                                                            style="margin-left: -24px;" xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-journal-text" viewBox="0 0 16 16">
                                                            <path
                                                                d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                                            <path
                                                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                                            <path
                                                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                                        </svg>
                                                        <font size="2">&nbsp;&nbsp;On Progress</font>
                                                    </button>
                                                    <ul class="btn dropdown-menu" data-bs-toggle="modal"
                                                        data-bs-target="#staticBackdrop{{ $rekap_each['order_id'] }}"
                                                        style="width: 50px; height: 32px; margin-top: 1.5px; background-color:rgba(34, 139, 34, 0.25);">
                                                        <li style="color: #3cb371; margin-left: 10px; margin-top: -5px;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                                            </svg>
                                                            <font size="2">&nbsp;&nbsp;Kirim Hasil</font>
                                                        </li>
                                                        <li class="divider"></li>
                                                    </ul>
                                                </div>
                                            @elseif ($rekap_each['status_pesanan'] == 'Selesai')
                                                <span class="badge badge-danger"
                                                    style="background-color:rgba(233, 25, 25, 0.14); color: #ff0000">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001" />
                                                    </svg><b>&nbsp;&nbsp;Project Selesai</b>
                                                </span>
                                            @elseif ($rekap_each['status_pesanan'] == 'Ditolak')
                                                <span class="badge badge-danger"
                                                    style="background-color:rgba(233, 25, 25, 0.14); color: #ff0000">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001" />
                                                    </svg><b>&nbsp;&nbsp;Project Ditolak</b>
                                                </span>
                                            @endif

                                        </td>
                                    </tr>
                                @endif

                                <!-- Modal Kirim Hasil -->
                                <div class="modal fade" id="staticBackdrop{{ $rekap_each['order_id'] }}"
                                    data-bs-backdrop="static" data-bs-keyboa rd="false" tabindex="-1"
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form method="POST" action="{{ route('uploadhasilkerjaan') }}">
                                                @csrf
                                                <input name="id" value="{{ $rekap_each['order_id'] }}" hidden>
                                                <div class="modal-header border-0">
                                                    <h5 class="modal-title" id="staticBackdropLabel"
                                                        style="margin-left:40%;">Kirim Hasil</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" style="text-align: center;">
                                                    Masukkan link hasil pengerjaan project kepada client!
                                                    <br /><br /><br />
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon3">
                                                            <i class="fa fa-link" aria-hidden="true"></i>
                                                        </span>
                                                        <input name="link_pengerjaan" type="url" class="form-control"
                                                            placeholder="Masukkan Link Pengerjaan" id="basic-url"
                                                            aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="modal-footer border-0">
                                                    <button class="btn" type="submit"
                                                        style="display: flex; flex-direction: row; justify-content: center; align-items: center; width: 150px; background: #121814; border-radius: 10px; color: whitesmoke; height: 40px; ">Kirim</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
@endsection
