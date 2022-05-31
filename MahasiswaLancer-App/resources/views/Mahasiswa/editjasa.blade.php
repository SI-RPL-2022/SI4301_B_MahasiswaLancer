@extends('Mahasiswa.layout.index')

@section('container')
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 37px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1); width: 947px;">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center;">Edit Jasa</h4>
                <!-- Start Form Add Jasa -->
                <div class="d-flex">
                    <form>
                        <div style="margin-left: 120px; margin-top: 50px;">
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label"><b>Judul Jasa</b></label>
                                <input style="width:840px; height:43px;" type="text" class="form-control" id="judul"
                                    placeholder="Judul Jasa">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputHarga1" class="form-label"><b>Harga Jasa</b></label>
                                <input type="number" class="form-control" id="harga" placeholder="0.0">
                            </div>
                            <div class="mb-4">
                                <label for="exampleFormControlDesc1" class="form-label"><b>Deskripsi Jasa</b></label>
                                <textarea class="form-control" id="desc" placeholder="Deskripsi Jasa" style="height:268px;"></textarea>
                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlDesc1" class="form-label"><b>Gambar Jasa</b></label>
                                <div class="card-group">
                                    <div>
                                        <div id="rectangle" style="position: absolute; left: 160px; top: 740px;"></div>
                                        <img src="assetsmhs/images/dashboard/image 45.png" class="card-img-top" alt="...">
                                        <p style="position: absolute; left: 190px; top: 745px; color:whitesmoke;">Foto Utama
                                        </p>
                                    </div>
                                    <div style="margin-left: 30px;">
                                        <img src="assetsmhs/images/dashboard/image 46.png" class="card-img-top" alt="...">
                                    </div>
                                    <div style="margin-left: 30px;">
                                        <img src="assetsmhs/images/dashboard/image 51.png" class="card-img-top" alt="...">
                                    </div>
                                    <div style="margin-left: 30px;">
                                        <a href="#"><button
                                                style="color:whitesmoke; width: 133.85px; height: 99.26px; border-radius: 27.637px; background: #151E17;">+
                                                </br>Tambah</br> Gambar</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="image_upload">
                                    <p>
                                        <b>Lampirkan Link File Pendukung (Opsional)</b>
                                    </p>
                                    <label for="file1" style="margin-top: -100px;">
                                        <a class="btn" rel="nofollow"
                                            style="color:whitesmoke; width: 145px; height: 43px; background: #686962; border-radius: 7px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><i
                                                class="fas fa-link"></i> Link File</a>
                                    </label>
                                    <input type="file" name="file1" id="file1" hidden>
                                </div>
                                <div id="rectangle2"></div>
                            </div>
                            <button type="submit" class="btn"
                                style="margin-top: 30px; margin-left: 300px;  width: 255px; height: 48px; background: #151E17; border-radius: 33px; color:whitesmoke; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- End Form Add Jasa -->
            </div>
        </div>
    </div>
@endsection
