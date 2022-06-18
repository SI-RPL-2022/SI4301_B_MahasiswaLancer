@extends('Client.layout.index')

@section('container')
<link rel="stylesheet" href="{{ url('assetsmhs/vendors/mdi/css/materialdesignicons.min.css') }}">
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
        background: #E5A426;
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
        background: #E5A426;
        border-radius: 30.3333px;
        margin: -0.5em 6.9em;
        display: flex;
        color: #fff;
        font-size: 10px;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .form-control {
        border: 0px;
        margin-left: -12px;
        margin-top: -10px;
        font-weight: bold
    }

    .dropbtn {
        border: 1px solid #D1D5DB;
        width: 722px;
        height: 65px;
        box-sizing: border-box;
        border-radius: 7px;
        border: none;
        cursor: pointer;
    }

    .container .dropdown .dropbtn i.menu-arrow {
        font: normal normal normal 24px/1 "Material Design Icons";
        font-size: 2rem;
        color: #9e9da0;
        margin-left: 70%;
    }

    .container .dropdown .dropbtn i.menu-arrow:before {
        content: "\f140";
        font-size: inherit;
        color: inherit;
    }


    .container .dropdown .dropbtn[aria-expanded="true"] .menu-arrow:before {
        content: "\f143";
    }

    .sidebar .nav .nav-item .collapse {
        z-index: 999;
    }

    .dropbtn a {
        font-weight: 600;
        font-size: 16px;
        line-height: 16px;
        letter-spacing: 0.23px;
        color: #121212;
    }

    .dropbtn p {
        margin-top: 1px;
        font-weight: 400;
        font-size: 12px;
        line-height: 110%;
        letter-spacing: 0.5px;
        color: #454141;
    }

    #image {
        margin-top: 15px;
        margin-left: -120px;
    }

    #metode {
        margin-top: 10px;
    }

    #bank {
        margin-top: -10px;

    }

    #namaBank {
        margin-left: -60%;

    }

    #icon {
        margin-top: 15px;
    }

    .atm {
        border: 1px solid #D1D5DB;
        border-radius: 7px;
        width: 722px;
        height: auto;
        margin-top: -35px;
    }

    .form-check {
        margin-left: 30px;
        margin-top: 40px;
    }

    .form-check a {
        font-weight: 600;
        font-size: 16px;
        line-height: 16px;
        letter-spacing: 0.23px;
        color: #121212;
    }

    .form-check p {
        margin-top: 1px;
        font-weight: 400;
        font-size: 12px;
        line-height: 110%;
        letter-spacing: 0.5px;
        color: #454141;
    }

    #button1 {
        width: 338px;
        height: 85px;
        border-radius: 10px;
        background-color: #F2B134;
    }
</style>

<h2 style="
        padding-top:20px;
        width:fit-content;
        display:block;
        margin:1em 2em;">
    <b>Pembayaran</b>
</h2>
<p style="width:fit-content;
        display:block;
        margin:1em 4em -1em;">2 dari 2 langkah
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
        <p style="margin-left:-218%; margin-top:-11px; color:#E5A426;"><b>Pembayaran Pesanan</b></p>
    </div>


</div>


<div class="row">
    <!-- pilih metode -->
    <div class="col grid-margin" style="padding-top:30px;">
        <div class="card" style="width:796px; height:auto; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1); border-radius: 6px; left:4em;">
            <div class="card-body">
                <h4 style="width:fit-content;display:block;margin:1em;"><b>Pilih Metode Pembayaran</b> </h4>
                <div class="container">
                    <!-- dropdown metode -->
                    <div class="dropdown">
                        <!-- metode bank transfer -->
                        <button class="dropbtn collapsed mb-4" data-bs-toggle="collapse" href="#myDropdown" aria-expanded="false" aria-controls="myDropdown">
                            <div class="row">
                                <div class="col"><img id="image" src="asset-images/metode/cedit.png" alt="..."></div>
                                <div class="col" id="metode"><a style="margin-left:-85%;">ATM/Bank Transfer/M-Banking/Internet Banking</a>
                                    <p style="margin-left:-140%;">Bayar dari ATM Bersama, Prima, atau Alto</p>
                                </div>
                                <div class="col" id="icon"><i class="menu-arrow"></i></div>
                            </div>
                        </button>
                        <!-- dropdown bank -->
                        <div id="myDropdown" class="collapse">
                            <div class="atm mb-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <div class="row">
                                            <div class="col"><img style="margin-left:10px; margin-top:-10px;" src="asset-images/metode/Group 261.png" alt="..."></div>
                                            <div class="col" id="bank"><a id="namaBank">Mandiri</a>
                                                <p style="margin-left:-60%;">Bayar dari ATM Mandiri atau internet banking</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <div class="row">
                                            <div class="col"><img style="margin-left:10px; margin-top:-10px;" src="asset-images/metode/bni.png" alt="..."></div>
                                            <div class="col" id="bank" style="margin-left: 10px;"><a id="namaBank">BNI</a>
                                                <p style="margin-left:-60%;">Bayar dari ATM BNI atau internet banking</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <div class="row">
                                            <div class="col"><img style="margin-left:10px; margin-top:-10px;" src="asset-images/metode/permata.png" alt="..."></div>
                                            <div class="col" id="bank" style="margin-left :-3px;"><a id="namaBank">Permata Bank</a>
                                                <p style="margin-left:-60%;">Bayar dari ATM Permata Bank atau internet banking</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <div class="row">
                                            <div class="col"><img style="margin-left:10px; margin-top:-10px;" src="asset-images/metode/bca.png" alt="..."></div>
                                            <div class="col" id="bank" style="margin-left:12px ;"><a id="namaBank">BCA</a>
                                                <p style="margin-left:-60%;">Bayar dari BCA Bank atau internet banking</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <div class="row">
                                            <div class="col"><img style="margin-left:10px; margin-top:-10px;" src="asset-images/metode/bri.png" alt="..."></div>
                                            <div class="col" id="bank" style="margin-left:12px ;"><a id="namaBank">BRI</a>
                                                <p style="margin-left:-60%;">Bayar dari BRI Bank atau internet banking</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <div class="row">
                                            <div class="col"><img style="margin-left:10px; margin-top:-10px;" src="asset-images/metode/kartu.png" alt="..."></div>
                                            <div class="col" id="bank" style="margin-left:25px ;"><a id="namaBank">Jaringan ATM</a>
                                                <p style="margin-left:-60%;">Bayar di jaringan ATM bank lain</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- end dropdown bank -->

                        <!-- metode e-wallet -->
                        <button class="dropbtn collapsed mb-4" data-bs-toggle="collapse" href="#gopay" aria-expanded="false" aria-controls="gopay">
                            <div class="row">
                                <div class="col"><img id="image" src="asset-images/metode/dompet.png" alt="..."></div>
                                <div class="col" id="metode"><a style="margin-left:-169%;">GoPay/e-Wallet Lainnya</a>
                                    <p style="margin-left:-118%;">Scan kode QR dengan GoPay atau e-wallet lainnya</p>
                                </div>
                                <div class="col" id="icon"><i class="menu-arrow"></i></div>
                            </div>
                        </button>
                        <!-- dropdown e-wallet -->
                        <div id="gopay" class="collapse">
                            <div class="atm mb-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <div style="margin-top:-2px ;">
                                            <a>e-Wallet</a>
                                            <p>Bayar dari berbagai produk e-Wallet Anda dengan scan kode QR</p>
                                            <div class="row mb-4">
                                                <div class="col">
                                                    <img src="asset-images/metode/gopay.png" alt="...">
                                                </div>
                                                <div class="col">
                                                    <img style="margin-left:-50px;" src="asset-images/metode/linkaja.png" alt="...">
                                                </div>
                                                <div class="col">
                                                    <img style="margin-left:-100px;" src="asset-images/metode/ovo.png" alt="...">
                                                </div>
                                                <div class="col">
                                                    <img style="margin-left:-150px;" src="asset-images/metode/dana.png" alt="...">
                                                </div>
                                                <div class="col">
                                                    <img style="margin-left:-200px;" src="asset-images/metode/shopeepay.png" alt="...">
                                                </div>
                                                <div class="col">
                                                    <img style="margin-left:-250px;" src="asset-images/metode/mobile.png" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="width: 675px; margin-left:-30px;">
                                        <div>
                                            <h6>Cara Pembayaran</h6>
                                            <p>1. Buka aplikasi Gojek atau e-wallet lain apapun milik Anda.</p>
                                            <p>2. Pindai kode QR yang ada pada monitor Anda.</p>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <img src="asset-images/metode/image97.png" alt="...">
                                                </div>
                                                <div class="col">
                                                    <img style="margin-top:50px; margin-left:-50px;" src="asset-images/metode/image99.png" alt="...">
                                                </div>
                                            </div>
                                            <p>3. Periksa detail transaksi Anda pada aplikasi, lalu tap tombol Bayar.</p>
                                            <p>4. Masukkan PIN Anda.</p>
                                            <p>5. Transaksi Anda Telah Selesai.</p>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- end dropdown e-wallet -->

                        <!-- metode kredit card -->
                        <button class="dropbtn collapsed mb-4" data-bs-toggle="collapse" href="#dropdownKredit" aria-expanded="false" aria-controls="dropdownKredit">
                            <div class="row">
                                <div class="col"><img id="image" src="asset-images/metode/card.png" alt="..."></div>
                                <div class="col" id="metode"><a style="margin-left:-185%;">Kartu Kredit/Debit</a>
                                    <p style="margin-left:-126%;">Bayar dengan Kartu Visa, MasterCard, atau JBC</p>
                                </div>
                                <div class="col" id="icon"><i class="menu-arrow"></i></div>
                            </div>
                        </button>
                        <!-- dropdown kredit card -->
                        <div id="dropdownKredit" class="collapse">
                            <div class="atm mb-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <div style="margin-top:-2px ;">
                                            <a>Kartu Kredit atau Debit</a>
                                            <p>Bayar dari berbagai produk kartu kredit atau debit</p>
                                            <div class="row mb-4">
                                                <div class="col">
                                                    <img src="asset-images/metode/mastercard.png" alt="...">
                                                </div>
                                                <div class="col">
                                                    <img style="margin-left:-50px;" src="asset-images/metode/visa.png" alt="...">
                                                </div>
                                                <div class="col">
                                                    <img style="margin-left:-100px;" src="asset-images/metode/jcb.png" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- end dropdown kredit card -->

                        <!-- metode gerai -->
                        <button class="dropbtn collapsed mb-4" data-bs-toggle="collapse" href="#dropdownGerai" aria-expanded="false" aria-controls="dropdownGerai">
                            <div class="row">
                                <div class="col"><img id="image" src="asset-images/metode/toko.png" alt="..."></div>
                                <div class="col" id="metode"><a style="margin-left:-230%;">Gerai</a>
                                    <p style="margin-left:-134%;">Bayar melalui gerai yang ada disekitar Anda</p>
                                </div>
                                <div class="col" id="icon"><i class="menu-arrow"></i></div>
                            </div>
                        </button>
                        <!-- dropdown gerai -->
                        <div id="dropdownGerai" class="collapse">
                            <div class="atm">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <div class=" row">
                                            <div class="col"><img style="margin-left:10px; margin-top:-10px;" src="asset-images/metode/Group261.png" alt="..."></div>
                                            <div class="col" id="bank"><a style="margin-left:-55%;">Alfamart</a>
                                                <p style="margin-left:-55%;">Bayar dari gerai Alfamart terdekat</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check" style="margin-top: 20px ;">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <div class="row">
                                            <div class="col"><img style="margin-left:10px; margin-top:-10px;" src="asset-images/metode/Group262.png" alt="..."></div>
                                            <div class="col" id="bank"><a style="margin-left:-55%;">Indomaret</a>
                                                <p style="margin-left:-55%;">Bayar dari gerai Indomaret terdekat</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- end dropdown gerai -->
                    </div>
                    <!-- end dropdown metode -->
                </div>
            </div>
        </div>
    </div>
    <!-- end pilih metode -->

    <!-- Rincian Pembayaran -->
    <div class="col grid-margin" style="padding-top:30px;">
        <div class="card" style="width:336px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1); border-radius: 6px; left:4em;">
            <div class="card-body">
                <h7 style="width:fit-content;display:block;margin-left:4px; padding-bottom:20px;"><b>Rincian Pembayaran</b></h7>
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
                    <!-- button bayar -->
                    <a type="submit" class="btn" style="width: 270px; height: 43px; 
                                background: #949393; border-radius: 10px; 
                                color:whitesmoke; margin-top:40px;
                                ">Bayar Sekarang</a>
                    <a {{-- href="{{ route('pembayaran') }}" --}} type="submit" class="btn" style="width: 135px; height: 43px; 
                                background: #E5A426; border-radius: 10px; 
                                color:whitesmoke; margin-top:20px; margin-left:60px;
                                ">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end Rincian Pembayaran -->
</div>


<br>
<br>
<br>
<br>



@endsection