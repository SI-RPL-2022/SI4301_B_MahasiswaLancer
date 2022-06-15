@extends('Client.layout.index')

@section('container')
<div class="text-center">
    <h2
    style="
            padding-top:58px;
          ">
          <b>Pesanan Jasa Terkirim</b> 
</h2>
</div>

<div class="container">
    <div class="col-12 grid-margin" style="padding-top:40px;">

        <div class="card" style="border-radius: 37px; width:947px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1); left:150px">
            <div class="card-body">
                <h5 style="width:fit-content;display:block;margin:2.5em auto;"><b>Menunggu Konfirmasi Pesanan</b> </h5>
                <center><img src="assetsmhs/images/faces/tick.png"
                            style="width:235px; height: auto; padding-bottom: 50px; padding-top:30px; ">
                </center>
                <div class="mb-4">
                    <table class="table table-borderless" style="margin-top: 40px;">
                        <tbody>
                            <tr>
                                <th></th>
                                <th width="800px"></th>
                                <th width="200px"></th>
                            </tr>
                            <tr>
                                <td><img src="assetsmhs/images/dashboard/image 50.png"
                                        style=" width:200px; height: auto; padding-bottom: 50px; padding-left:40px;"></td>
                                <td><a><b>Desain UI/UX apps dan mobile</b></a>
                                    <p><div class="row p-t-10">
                                            <div class="col-sm-1">
                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" alt="..." class="rounded-circle" style="width: 30px;">
                                            </div>
                                            <div class="col">
                                            <p class="">Shobrul Jamel</p>
                                            </div>
                                        </div></p>
                                </td>
                                <td class="d-flex">
                                    <p class="card-text" style="padding-right:40px;"><b>Rp. 350.000</b></p>
                                </td>
                            </tr>
                        </tbody> 
                    </table>
                    <div style="
                                margin-left: 169px;
                                margin-right: 160px;
                                padding-bottom: 100px;
                                font-weight: 500;
                                font-size: 16px;
                                line-height: 110%;
                                /* or 18px */
    
                                text-align: center;
                                letter-spacing: 0.23px;"
                                >
                        <a>
                            Pesanan Jasa anda telah terkirim ke MahasiswaLancer untuk menunggu konfirmasi psersetujuan. Notifikasi konfirmasi persetujuan perngerjaan akan muncul di status pengerjaan
                        </a>
                    </div>
                    <button type="submit" class="btn"
                            style="width: 255px; height: 48px;
                                    border: 2px solid #000000;
                                    margin-left:190px; margin-bottom:90px;
                                    border-radius: 33px;"><b>Lihat Status Pesanan</b></button>
                    <button type="submit" class="btn"
                            style="width: 255px; height: 48px; 
                                    background: #151E17; border-radius: 33px; 
                                    color:whitesmoke; margin-bottom:90px;
                                    margin-left:32px;"><b>Ajukan Pesanan Jasa</b></button>
                </div>   
            </div>
        </div>

    </div>
</div>

<br>      
<br> 
<br>      
<br>
@endsection





