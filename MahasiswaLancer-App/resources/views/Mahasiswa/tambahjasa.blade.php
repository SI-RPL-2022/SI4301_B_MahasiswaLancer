@extends('Mahasiswa.layout.index')

@section('container')
    <div class="col-12 grid-margin">
        <div class="card" style="border-radius: 37px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1);">
            <div class="card-body">
                <h4 style="width:fit-content;display:block;margin:1em auto;"><b>Tambah Jasa</b> </h4>
                <form>
                    <div style="margin-left: 5%; margin-right: 5%; margin-top: 40px; padding-bottom: 150px;">
                        <div class="mb-4">
                            <label for="exampleInputNama1" class="form-label"><b>Judul Jasa</b></label>
                            {{-- 840px --}}
                            <input style="width:100%; height:43px;" type="text" class="form-control" id="exampleInputNama1"
                                placeholder="Judul Jasa" value="{{ Auth::user()->name }}" readonly>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label"><b>Harga Jasa</b></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Harga Jasa"
                                value="{{ Auth::user()->email }}" readonly>
                        </div>
                        <div class="mb-5">
                            <label for="exampleFormControlDesB1" class="form-label"><b>Deskripsi</b></label>
                            <textarea class="form-control" id="exampleFormControlDesB1" placeholder="Deskripsi Biodata"
                                style="height:200px;"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputNoHP1" class="form-label"><b>Deskripsi</b></label>
                            <input type="text" class="form-control" id="exampleInputNoHP1" placeholder="No Hp">
                        </div>
                        <button type="submit" class="btn"
                            style="width: 176px; height: 48px; background: #151E17; border-radius: 33px; color:whitesmoke;">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection