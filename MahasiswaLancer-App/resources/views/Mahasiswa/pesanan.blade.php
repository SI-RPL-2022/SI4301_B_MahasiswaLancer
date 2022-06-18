@extends('Mahasiswa.layout.index')

@section('container')
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border: 1px solid #EFEFEF; box-sizing: border-box; width: 947px;">
            <div class="card-body">
                <h4 class="card-title">Pesanan</h4>
                <hr>
                <div class="d-flex">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col"width="8%">ID Order</th>
                                <th scope="col" width="25%">Jasa</th>
                                <th scope="col">Client</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rekap as $rekap_each)
                                <tr>
                                    <th scope="row" style="padding-left: 20px; padding-top:15px;">
                                        {{ $rekap_each['order_id'] }}</th>
                                    <td style="padding-top:15px;">{{ $rekap_each['jasa'] }}</td>
                                    <td style="padding-top:15px;">{{ $rekap_each['client'] }}</td>
                                    <td style="padding-top:15px;">{{ $rekap_each['deadline'] }}</td>
                                    <td class="d-flex">
                                        <a class="btn" data-bs-toggle="modal" data-bs-target="#tolak{{ $rekap_each['order_id'] }}"
                                            style="background: rgba(233, 25, 25, 0.14); border-radius: 3px; width: 140px;">
                                            <span style=" color: red;">
                                                <i class="fa fa-close"></i> &nbsp Tolak
                                            </span>
                                        </a>
                                        <a class="btn" data-bs-toggle="modal" data-bs-target="#terima{{ $rekap_each['order_id'] }}"
                                            style="margin-left: 25px; background: rgba(35, 170, 68, 0.16); border-radius: 3px; width: 150px;">
                                            <span style="color: green;">
                                                <i class="fa fa-check"></i>&nbsp Terima
                                            </span>
                                        </a>
                                        <a data-bs-toggle="modal" data-bs-target="#info{{ $rekap_each['order_id'] }}" style="margin-left: 15px;">
                                            <span style="color: blue;">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>

                                <!-- Modal Terima Pesanan -->
                                <div class="modal fade" id="terima{{ $rekap_each['order_id'] }}" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header  border-0">
                                                <h5 class="modal-title" id="staticBackdropLabel"
                                                    style="color: #23AA44; margin-left:38%;">Terima Pesanan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body" style="text-align: center;">
                                                Apakah anda yakin ingin menerima pesanan ini ?
                                                <br /><br /><br />
                                            </div>


                                            <form method="POST" action="{{ route('terimapesanan') }}">
                                                @csrf
                                                <input type="hidden" name="id"
                                                    value="{{ $rekap_each['order_id'] }}" id="">

                                                <div class="modal-footer  border-0">
                                                    <button type="button" class="btn"
                                                        style="margin-left:-500px; display: flex; flex-direction: row; justify-content: center; align-items: center; border: 1px solid #000000; box-sizing: border-box; border-radius: 10px; width: 219px; height: 60px;"
                                                        data-bs-dismiss="modal">
                                                        Urungkan
                                                    </button>
                                                    <button type="submit" class="btn"
                                                        style="display: flex; flex-direction: row; justify-content: center; align-items: center; width: 219px; background: #121814; border-radius: 10px; color: whitesmoke; height: 60px; ">
                                                        Terima Pesanan
                                                    </button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Tolak Pesanan -->
                                <div class="modal fade" id="tolak{{ $rekap_each['order_id'] }}" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <h5 class="modal-title" id="staticBackdropLabel"
                                                    style="color: #EC1C24; margin-left:38%;">Tolak Pesanan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="text-align: center;">
                                                Apakah anda yakin ingin menolak pesanan ini ? <br /><br /><br />
                                            </div>
                                            

                                            <form method="POST" action="{{ route('tolakpesanan') }}">
                                              @csrf
                                              <input type="hidden" name="id"
                                                  value="{{ $rekap_each['order_id'] }}" id="">

                                              <div class="modal-footer  border-0">
                                                  <button type="button" class="btn"
                                                      style="margin-left:-500px; display: flex; flex-direction: row; justify-content: center; align-items: center; border: 1px solid #000000; box-sizing: border-box; border-radius: 10px; width: 219px; height: 60px;"
                                                      data-bs-dismiss="modal">
                                                      Urungkan
                                                  </button>
                                                  <button type="submit" class="btn"
                                                      style="display: flex; flex-direction: row; justify-content: center; align-items: center; width: 219px; background: #121814; border-radius: 10px; color: whitesmoke; height: 60px; ">
                                                      Tolak Pesanan
                                                  </button>
                                              </div>
                                          </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal info -->
                                <div class="modal fade" id="info{{ $rekap_each['order_id'] }}" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <h5 class="modal-title" id="staticBackdropLabel"
                                                    style="color: blue; margin-left:38%;">Deskripsi Pesanan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="text-align: center;">
                                                {{ $rekap_each['deskripsi'] }} <br /><br /><br />
                                            </div>
                                            <div class="modal-footer  border-0">
                                                <div class="input-group mb-3">
                                                    <button type="button" class="input-group-text" id="basic-addon1"
                                                        onclick="copyEvent('copy')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-back"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M0
                                                                  2a2 2 0 0 1 2-2h8a2 2 0 0 1 2
                                                                  2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2
                                                                  2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0
                                                                  1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0
                                                                  0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0
                                                                  0-1-1H2z" />
                                                        </svg>&nbsp;Copy
                                                    </button>
                                                    <script>
                                                        function copyEvent(id) {
                                                            var str = document.getElementById(id);
                                                            window.getSelection().selectAllChildren(str);
                                                            document.execCommand("Copy")
                                                        }
                                                    </script>
                                                    <span class="form-control">
                                                        <p id="copy" style="margin:0;text-align:left;">
                                                          {{ $rekap_each['link_pendukung'] }}
                                                        </p>
                                                    </span>
                                                </div>
                                            </div>
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
@endsection
