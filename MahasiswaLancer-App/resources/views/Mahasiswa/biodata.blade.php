@extends('Mahasiswa.layout.index')

@section('container')
    <div class="col-12 grid-margin">
        <div class="card" style="border-radius: 37px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1);">
            <div class="card-body">
                <img class="rounded-circle" width="180px" height="180px"
                    style="display:block;margin-left:auto; margin-right:auto;" src="{{ Auth::user()->profile_photo_url }}"
                    alt="{{ Auth::user()->name }}" />
                {{-- <img src="assetsmhs/images/faces/face27.jpg" alt="..."
                                        style="border-radius: 50%; margin-left: 40%; width:180px; height: auto;"> --}}


                                        <a href="{{ route('profile.show') }}" class="text-dark" style="text-decoration: none;width:fit-content;display:block;margin:1em auto;">Edit Profile</a>

                <form>
                    <div style="margin-left: 5%; margin-right: 5%; margin-top: 65px; padding-bottom: 150px;">
                        <div class="mb-4">
                            <label for="exampleInputNama1" class="form-label"><b>Nama
                                    Lengkap</b></label>
                            {{-- 840px --}}
                            <input style="width:100%; height:43px;" type="text" class="form-control" id="exampleInputNama1"
                                placeholder="Nama Lengkap" value="{{ Auth::user()->name }}" readonly>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label"><b>Email</b></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"
                                value="{{ Auth::user()->email }}" readonly>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputNoHP1" class="form-label"><b>No
                                    Hp</b></label>
                            <input type="email" class="form-control" id="exampleInputNoHP1" placeholder="No Hp">
                        </div>
                        <div class="mb-5">
                            <label for="exampleFormControlDesB1" class="form-label"><b>Deskripsi
                                    Biodata</b></label>
                            <textarea class="form-control" id="exampleFormControlDesB1" placeholder="Deskripsi Biodata"
                                style="height:271px;"></textarea>
                        </div>
                        <button type="submit" class="btn"
                            style="width: 176px; height: 48px; background: #151E17; border-radius: 33px; color:whitesmoke;">Simpan</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection
