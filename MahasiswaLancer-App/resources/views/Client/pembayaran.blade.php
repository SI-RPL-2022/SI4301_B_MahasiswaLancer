@extends('Client.layout.index')

@section('container')
<style>
    .box1-1 {
        width: 265px;
        height: 7px;
        background: #E5A426;
        border-radius: 10px 0px 0px 10px;
        margin: 1em 4em;
    }

    .box1-2 {
        width: 265px;
        height: 7px;
        background: #E0E0E0;
        border-radius: 0px 10px 10px 0px;
        margin: 1em 5em;
    }

    .langkah1 {
        width: 14px;
        height: 14px;
        background: #E5A426;
        border-radius: 30.3333px;
        margin: -0.5em 6.5em;
        display: flex;
        color: #fff;
        font-size: 10px;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .langkah2 {
        width: 14px;
        height: 14px;
        background: #949393;
        border-radius: 30.3333px;
        margin: -0.5em 6.5em;
        display: flex;
        color: #fff;
        font-size: 10px;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
</style>
<h2 style="padding-top:20px;
          width:fit-content;
          display:block;
          margin:1em 2em;">
    <b>Pembayaran</b>
</h2>
<p style="width:fit-content;
          display:block;
          margin:1em 4em -1em;">1 dari 2 langkah
</p>
<div class="row">
    <div class="col">
        <div class="box1-1"></div>
    </div>
    <div class="col" style="margin-left:-65%;">
        <div class="box1-2"></div>
    </div>

</div>
<div class="row">
    <div class="col">
        <div class="langkah1">
            1
        </div>
    </div>
    <div class="col">
        <p style="margin-left:-83%; margin-top:-11px; color:#E5A426;"><b>Rincian Pesanan</b></p>
    </div>

    <div class="col">
        <div class="langkah2" style="margin-left:-116%">
            2
        </div>
    </div>
    <div class="col">
        <p style="margin-left:-218%; margin-top:-11px; color:#949393;"><b>Pembayaran Pesanan</b></p>
    </div>


</div>


<div class="row">
    <div class="col grid-margin" style="padding-top:30px;">
        <div class="card" style="width:796px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1); border-radius: 6px; left:4em;">
            <div class="card-body">
                <h5 style="width:fit-content;display:block;margin:1em;"><b>Rincian Pesanan</b> </h5>
                <div class="container">
                    <div class="mb-1">
                        <p>Order ID</p>
                        <p class="fw-bold" style="margin-top: -10px">12308923</p>
                    </div>
                    <div class="mb-1">
                        <p>Nama</p>
                        <p class="fw-bold" style="margin-top: -10px">{{ Auth::user()->name }}</p>
                    </div>
                    <div class="mb-1">
                        <p>Email</p>
                        <p class="fw-bold" style="margin-top: -10px">{{ Auth::user()->email }}</p>
                    </div>
                    <div class="mb-1 mt-5">
                        <label class="form-label">Produk</label>
                        <table class="table table-borderless" style="margin-left:-50px; margin-top:-20px;">
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th width="800px"></th>
                                    <th width="200px"></th>
                                </tr>
                                <tr>
                                    <td><img src="assetsmhs/images/dashboard/image 50.png" style=" width:213px; height: auto; padding-bottom: 50px; padding-left:40px;"></td>
                                    <td><a><b>Desain UI/UX apps dan mobile</b></a>
                                        <p>
                                        <div class="row p-t-10">
                                            <div class="col-sm-1">
                                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" alt="..." class="rounded-circle" style="width: 30px;">
                                            </div>
                                            <div class="col">
                                                <p class="">&nbsp;&nbsp;Shobrul Jamel</p>
                                            </div>
                                        </div>
                                        </p>
                                    </td>
                                    <td class="d-flex">
                                        <p class="card-text" style="padding-right:40px;"><b>Rp. 350.000</b></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col grid-margin" style="padding-top:30px;">
        <div class="card" style="width:336px; height:306px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1); border-radius: 6px; left:4em;">
            <div class="card-body">
                <h7 style="width:fit-content;display:block;margin:1em;"><b>Rincian Pembayaran</b></h7>
                <div class="container">
                    <div class="row" style="width:140%;">
                        <div class="col" style="margin-left:-20px;">
                            <p style="font-size:14px;">Harga Produk</p>
                        </div>
                        <div class="col" style="padding-left:70px;">
                            <p style="font-size:14px;">Rp. 350.000</p>
                        </div>
                    </div>
                    <div class="row" style="width:140%; margin-top:-10px;">
                        <div class="col" style="margin-left:-20px;">
                            <p style="font-size:14px;">Diskon</p>
                        </div>
                        <div class="col" style="padding-left:70px;">
                            <p style="font-size:14px;">Rp. 50.000</p>
                        </div>
                    </div>
                    <hr style="width: 290px; height: 3px; background: #949393; margin-left:-20px; margin-top:-0.1px;">
                    <div class="row" style="width:140%; margin-top:-10px;">
                        <div class="col" style="margin-left:-20px;">
                            <p style="font-size:14px; width:120px;"><b>Total Pembayaran</b></p>
                        </div>
                        <div class="col" style="padding-left:70px;">
                            <p style="font-size:14px;"><b>Rp. 300.000</b></p>
                        </div>
                    </div>
                    <button type="submit" class="btn" style="width: 270px; height: 43px; 
                                   background: linear-gradient(111.38deg, #E5A426 11.9%, #DFBE0F 128.68%); border-radius: 10px; 
                                   color:whitesmoke; margin-top:40px;
                                   ">Pilih Metode Bayar</button>
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