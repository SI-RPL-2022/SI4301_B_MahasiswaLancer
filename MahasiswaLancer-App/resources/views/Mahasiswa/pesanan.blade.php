@extends('Mahasiswa.layout.index')

@section('container')
<div class="col-12 grid-margin stretch-card">
    <div class="card" style="border: 1px solid #EFEFEF; box-sizing: border-box; width: 947px;">
        <div class="card-body">
            <h4 class="card-title">Pesanan</h4>
            <hr >
            <div class="d-flex">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col"width="110px">ID Order</th>
                            <th scope="col" width="350px">Jasa</th>
                            <th scope="col">Client</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <th scope="row" style="padding-left: 20px; padding-top:15px;">2817</th>
                            <td style="padding-top:15px;">Desain UIUX untuk aplikasi ecoomerce</td>
                            <td style="padding-top:15px;">Supri Prawira</td>
                            <td style="padding-top:15px;">22-04-2022</td>
                            <td>
                               <a class="btn" data-bs-toggle="modal" data-bs-target="#tolak" style="background: rgba(233, 25, 25, 0.14); border-radius: 3px; width: 140px;">
                                   <span style=" color: red;">
                                       <i class="fa fa-close"></i> &nbsp Tolak
                                    </span>
                               </a>
                               <a class="btn" data-bs-toggle="modal" data-bs-target="#terima" style="margin-left: 25px; background: rgba(35, 170, 68, 0.16); border-radius: 3px; width: 150px;">
                                   <span style="color: green;" >
                                        <i class="fa fa-check"></i>&nbsp Terima
                                   </span>
                                </a>
                            </td>
                        </tr>   
                    </tbody>
                </table>
                <!-- Modal Terima Pesanan -->
                <div class="modal fade" id="terima" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header  border-0">
                          <h5 class="modal-title" id="staticBackdropLabel" style="color: #23AA44; margin-left:38%;">Terima Pesanan</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                          Apakah anda yakin ingin menerima pesanan ini ? <br/><br/><br/>
                        </div>
                        <div class="modal-footer  border-0">
                          <button type="button" class="btn" style="margin-left:-500px; display: flex; flex-direction: row; justify-content: center; align-items: center; border: 1px solid #000000; box-sizing: border-box; border-radius: 10px; width: 219px; height: 60px;" data-bs-dismiss="modal">Urungkan</button>
                          <button type="button" class="btn" style="display: flex; flex-direction: row; justify-content: center; align-items: center; width: 219px; background: #121814; border-radius: 10px; color: whitesmoke; height: 60px; ">Terima Pesanan</button>
                        </div>
                      </div>
                    </div>
                </div>
                <!-- Modal Tolak Pesanan -->
                <div class="modal fade" id="tolak" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header border-0">
                          <h5 class="modal-title" id="staticBackdropLabel" style="color: #EC1C24; margin-left:38%;">Tolak Pesanan</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                          Apakah anda yakin ingin menolak pesanan ini ? <br/><br/><br/>
                        </div>
                        <div class="modal-footer  border-0">
                          <button type="button" class="btn" style="margin-left:-500px; display: flex; flex-direction: row; justify-content: center; align-items: center; border: 1px solid #000000; box-sizing: border-box; border-radius: 10px; width: 219px; height: 60px;" data-bs-dismiss="modal">Urungkan</button>
                          <button type="button" class="btn" style="display: flex; flex-direction: row; justify-content: center; align-items: center; width: 219px; background: #121814; border-radius: 10px; color: whitesmoke; height: 60px; ">Tolak Pesanan</button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection