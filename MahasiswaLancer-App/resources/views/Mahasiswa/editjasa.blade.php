@extends('Mahasiswa.layout.index')

@section('container')
<div class="col-12 grid-margin">
    <div class="card" style="border-radius: 37px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
            <h4 style="width:fit-content;display:block;margin:1em auto;"><b>Edit Jasa</b> </h4>
            <form method="post" action="{{ route('editjasapost') }}" enctype="multipart/form-data">
                
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="id" value="{{ $jasa->id }}">
                <div style="margin-left: 5%; margin-right: 5%; margin-top: 40px; padding-bottom: 150px;">
                    <div class="mb-4">
                        <label for="exampleInputNama1" class="form-label"><b>Judul Jasa</b></label>
                        {{-- 840px --}}
                        <input name="judul" style="width:100%; height:43px;" type="text" class="form-control"
                            id="exampleInputNama1" placeholder="Judul Jasa" value="{{ $jasa->judul }}">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label"><b>Harga Jasa</b></label>
                        {{-- <input name="harga" type="number" class="form-control" id="exampleInputEmail1" placeholder="Harga Jasa"> --}}
                        <div class="d-flex">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp. </span>
                            </div>
                            <input name="harga" type="text" class="form-control" aria-label="Amount (to the nearest dollar)"
                                placeholder="Harga Jasa" value="{{ $jasa->harga }}">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                        
                    </div>

                    <div class="mb-5">
                        <label for="exampleFormControlDesB1" class="form-label"><b>Deskripsi</b></label>
                        <textarea name="deskripsi" class="form-control" id="exampleFormControlDesB1" placeholder="Deskripsi Biodata"
                            style="height:200px;"> {{ $jasa->deskripsi }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputNoHP1" class="form-label"><b>Gambar Jasa</b></label>
                        <div id="dvPreview">
                        </div>
                        <input type="file" name="gambar[]" class="myfrm form-control" id="fileupload" multiple>
                    </div>

                    <button type="submit" class="btn"
                        style="width: 176px; height: 48px; background: #151E17; border-radius: 33px; color:whitesmoke;">Simpan</button>

                </div>

                <hr>

            </form>

            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

            <script language="javascript" type="text/javascript">
                window.onload = function() {
                    var fileUpload = document.getElementById("fileupload");
                    fileUpload.onchange = function() {
                        if (typeof(FileReader) != "undefined") {
                            var dvPreview = document.getElementById("dvPreview");
                            dvPreview.innerHTML = "";
                            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                            for (var i = 0; i < fileUpload.files.length; i++) {
                                var file = fileUpload.files[i];
                                if (regex.test(file.name.toLowerCase())) {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        var img = document.createElement("IMG");
                                        img.height = "100";
                                        img.width = "100";
                                        img.src = e.target.result;
                                        img.setAttribute(
                                            'style',
                                            'margin: 1em',
                                        );
                                        dvPreview.appendChild(img);
                                    }
                                    reader.readAsDataURL(file);
                                } else {
                                    alert(file.name + " is not a valid image file.");
                                    dvPreview.innerHTML = "";
                                    return false;
                                }
                            }
                        } else {
                            alert("This browser does not support HTML5 FileReader.");
                        }
                    }
                };
            </script>

        </div>
    </div>
</div>
@endsection
