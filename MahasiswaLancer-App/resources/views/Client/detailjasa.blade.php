@extends('Client.layout.index')

@section('sidebar')
    @@parent
    <p>tes</p>
@stop

@section('container')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8">
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        @foreach ($cover as $cover_each)
                            <div class="carousel-item ">
                                <img src="/image/{{ $cover_each->alamat_gambar }}" alt="{{ $cover_each->alamat_gambar }}"
                                    class="d-block w-100" width="840px" height="472px">
                            </div>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $loop->iteration - 1 }}"
                                @if ($loop->first) class="active" @endif></button>
                        @endforeach

                        {{-- <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button> --}}
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        @foreach ($cover as $cover_each)
                            <div class="carousel-item @if ($loop->first) active @endif">
                                <img src="/image/{{ $cover_each->alamat_gambar }}"
                                    alt="{{ $cover_each->alamat_gambar }}" class="d-block w-100" width="840px"
                                    height="472px">
                            </div>
                        @endforeach

                        {{-- <div class="carousel-item">
                            <img src="https://searchengineland.com/wp-content/seloads/2018/09/writer-writing-ss-1920-800x450.jpg"
                                alt="Los Angeles" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="https://katarsa.id/wp-content/uploads/2020/06/Blog-Katarsa-2-1.png" alt="Chicago"
                                class="d-block w-100">
                        </div> --}}

                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>

                    </div>
                </div>
            </div>
            <div class="col-sm-4 p-t-50" style="padding-left: 50px; ">
                <div class="card" style="width: 370px; height: 480px; background-color: #202922;">
                    <div class="card-body" style="padding-left: 30px; padding-top: 30px;">
                        <h5 class="card-title text-white">{{ $detail_jasa->judul }}</h5>
                        <h6 class="card-subtitle p-t-8" style="color: #E5A426;">Rp {{ $detail_jasa->harga }}</h6>
                        <p class="card-text p-t-8" style="color:#C1C1C1;">{{ $detail_jasa->deskripsi }}</p>


                    </div>
                    <div class="row-fluid bottom p-5">
                        @role('client')
                        <a href="{{ route('konfirmasipesanan', [$detail_jasa->id]) }}" class="btn text-dark m-t-10"
                            style="background-color: #E5A426; border-radius: 86px; width: 170px;">
                            <b>Pesan Sekarang</b>
                        </a>
                        @endrole
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h3 style="padding-top: 60px; align-text:center;">Cara melakukan pemesanan jasa menggunakan MahasiswaLancer</h3>
        <div class="container" style="width: 1215px; padding-top: 40px;">
            <div style="width:100%">
                <img src="{{ url('asset-images/flow ilustration mahasiswa lancer.png') }}" alt=""
                    class="mx-auto d-block">
            </div>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt vestibulum facilisi et rhoncus tempus duis
                mattis amet id. Amet cras dictumst ac tortor aliquam faucibus mattis egestas. Volutpat neque dis eu purus
                sed pellentesque consequat, in enim. Magna est mauris lectus sagittis sagittis nisl. Maecenas porttitor
                semper tortor, tellus consequat amet. Diam aliquet id massa molestie risus elit mattis.
                Tincidunt ut morbi sit tellus tellus. Quis in leo lobortis in. Facilisis quis in id sed. Diam lobortis orci
                sollicitudin mauris. Aenean elementum magna augue eu.

                Commodo dui feugiat pulvinar orci, adipiscing.
                In sed dictum sed nibh ultricies. Feugiat non dictum magna urna, suscipit rhoncus senectus.
                Est, velit donec faucibus egestas sed auctor placerat sollicitudin.
                In viverra malesuada aliquam sed turpis viverra. Tincidunt tortor, risus sed porttitor libero faucibus
                neque, placerat vitae.

                Tincidunt cursus sit amet, metus massa iaculis sollicitudin. Eget aenean nibh ultrices placerat justo nisl.
                Metus purus feugiat suspendisse nulla. Sed bibendum porttitor vehicula donec volutpat dictum pulvinar. In
                massa pretium lorem ultricies sollicitudin vel augue. Ultricies ipsum, quis sed gravida aliquam vitae.
                Egestas cras ultricies lorem rhoncus. Quam tincidunt parturient nam orci auctor augue. Molestie nisi, sit
                posuere lorem ut ultricies. Elementum amet vitae arcu interdum eu quam bibendum tempor. Libero, sem id etiam
                vitae in morbi.
                Suspendisse at nisl scelerisque orci cras imperdiet iaculis. Neque, vulputate faucibus enim suscipit tortor
                lobortis eget non eu. Ac turpis feugiat tristique ut. Auctor viverra elementum interdum vulputate tincidunt
                amet, suspendisse tincidunt tortor. Mi amet adipiscing tincidunt eget molestie enim. Risus ut dictum
                tristique fermentum hendrerit iaculis neque. Metus quis aliquet morbi rutrum gravida ut enim. Ut maecenas
                elit ut faucibus. Mattis tincidunt et donec malesuada eget.
                Vel consectetur quam scelerisque non lacus parturient imperdiet elementum. Tortor, dui nisl vitae sapien
                tincidunt quisque vitae risus. Tristique molestie feugiat mattis scelerisque. In morbi elit dui fermentum id
                cursus enim, tempus. Dictum in amet sit aliquet interdum vel faucibus arcu auctor.
            </p> --}}

            <h4 style="padding-top: 30px">Tentang</h4>

            <div class="card w-75 m-t-40" style="height:250px;background-color: #202922; border-radius: 10px;">
                <div class="container">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3 p-4">

                                <img class="rounded-circle" alt="50x50"
                                    src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
                                    data-holder-rendered="true" width="170px">

                            </div>

                            <div class="col">
                                <h3 class="card-text text-white">{{ $user->name }}</h3>
                                <h5 class="card-text m-l-30" style="color: #C1C1C1;">Junior UI Designer</h5>
                                <hr style="color: #C1C1C1;">
                                <p class="card-text m-l-30" style="color: #C1C1C1;">
                                    {{ $user->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <h4 style="padding-top: 30px; color: #E5A426;">Rekomendasi Jasa Lainnya</h4>

            <div class="container">
                <div class="row" style="width: 1150px;">

                    <style>
                        .deskripsi {
                            margin-right: -100px;
                            display: -webkit-box;
                            -webkit-line-clamp: 3;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            width: 200px;
                            height: 20px;
                        }
                    </style>

                    <!-- Card 1 -->
                    @foreach ($jasas as $jasaeach)
                        <div class="card"
                            style="width: 17rem; margin-top: 40px; border-radius: 30px; margin-left:15px; padding: 0; height: 320px; background-color: #FFFFFF;">
                            <a href="{{ route('detailjasa', [$jasaeach->id]) }}" class="text-dark"
                                style="text-decoration: none;">
                                <img src="/image/{{ $jasaeach->cover }}" class="card-img-top" alt="..."
                                    style="width: 100%; height:180px; border-top-left-radius: 30px; border-top-right-radius: 30px; ">
                                <div class="card-body px-4">
                                    <p class="card-title desc"><b>{{ $jasaeach->judul }}</b></p>
                                    <p class="card-text" style="color: #E5A426;"><b>{{ $jasaeach->harga }}0</b></p>
                                    <div class="row p-t-10">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                            <div class="col-sm-2">
                                                <img width="30px" class="rounded-circle" src="{{ $jasaeach->profil }}"
                                                    alt="{{ $jasaeach->user }}" />
                                            </div>
                                            <div class="col">
                                                <p class="deskripsi">{{ $jasaeach->user }}</p>
                                            </div>
                                        @else
                                            <div class="col-sm-2">
                                                <svg class="ms-2" width="30px;"
                                                    xmlns="{{ url('http://www.w3.org/2000/svg') }}" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="col">
                                                <p class="deskripsi">{{ $jasaeach->user }}</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
@endsection

@section('asset')
    <!-- plugins:js -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('assetsmhs/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assetsmhs/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assetsmhs/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assetsmhs/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assetsmhs/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assetsmhs/js/dashboard.js') }}"></script>
    <script src="{{ asset('assetsmhs/js/todolist.js') }}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/1cea8d8163.js') }}" crossorigin="anonymous"></script>
    <!-- End custom js for this page -->
@endsection
