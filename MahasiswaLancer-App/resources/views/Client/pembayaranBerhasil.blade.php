@extends('Client.layout.index')

@section('container')

<div class="container">
    <div class="col-12 grid-margin" style="padding-top:40px;">

        <div class="card" style="border-radius: 37px; width:947px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1); left:150px">
            <div class="card-body">
                <h5 style="width:fit-content;display:block;margin:2.5em auto;"><b>Pembayaran Berhasil</b> </h5>
                <center><img src="{{ URL::asset('assetsmhs/images/faces/tick.png') }}"
                            style="width:235px; height: auto; padding-bottom: 50px; padding-top:30px; ">
                </center>
                <p class="text-center">Order ID</p>
                <p class="text-center fw-bold" style="margin-top: -10px">{{ $rekap['order_id'] }}</p>
                <p class="text-center">Nama</p>
                <p class="text-center fw-bold" style="margin-top: -10px">{{ $rekap['nama'] }}</p>
                <p class="text-center">Email</p>
                <p class="text-center fw-bold" style="margin-top: -10px">{{ $rekap['email'] }}</p>
                <div class="mb-4">
                    <table class="table table-borderless" style="margin-top: 40px;">
                        <tbody>
                            <tr>
                                <th></th>
                                <th width="800px"></th>
                                <th width="200px"></th>
                            </tr>
                            <tr>
                                <td><img src="/image/{{ $rekap['cover'] }}"
                                        style=" width:200px; height: 170px; padding-bottom: 50px; padding-left:40px;"></td>
                                <td><a><b>{{ $rekap['jasa'] }}</b></a>
                                    <p><div class="row p-t-10">
                                            <div class="col-sm-1">
                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" alt="..." class="rounded-circle" style="width: 30px;">
                                            </div>
                                            <div class="col">
                                            <p class="">{{ $rekap['mahasiswa'] }}</p>
                                            </div>
                                        </div></p>
                                </td>
                                <td class="d-flex">
                                    <p class="card-text" style="padding-right:40px;"><b>Rp. 350.000</b></p>
                                </td>
                            </tr>
                        </tbody> 
                    </table>

                    <a href="{{ route('statuspengerjaan') }}" class="btn"
                            style="width: 255px; height: 48px;
                                    border: 2px solid #000000;
                                    margin-left:190px; margin-bottom:90px;
                                    border-radius: 33px;"><b>Lihat Status Pesanan</b></button>
                    <a href="{{ route('landingpage') }}" class="btn"
                            style="width: 255px; height: 48px; 
                                    background: #151E17; border-radius: 33px; 
                                    color:whitesmoke; margin-bottom:90px;
                                    margin-left:32px;"><b>Cari Jasa Lain</b></a>
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





