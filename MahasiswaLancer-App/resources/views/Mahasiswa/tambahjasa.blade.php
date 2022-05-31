@extends('Mahasiswa.layout.index')

@section('container')
    <div class="col-12 grid-margin">
        <div class="card" style="border-radius: 37px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1);">
            <div class="card-body">
                <h4 style="width:fit-content;display:block;margin:1em auto;"><b>Tambah Jasa</b> </h4>
                <form method="post" action="{{ url('/dump') }}" enctype="multipart/form-data">
                    @csrf
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
                            <input type="file" class="form-control">
                        </div>

                        <button type="submit" value="send" class="btn"
                            style="width: 176px; height: 48px; background: #151E17; border-radius: 33px; color:whitesmoke;">Simpan</button>
                    </div>

                    <hr>

                    {{-- <div class="input-group-btn" id="increment">
                        <button class="btn btn-success" id="tambah" type="button"> <i
                                class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                    </div> --}}

                    {{-- <div class="input-group realprocode control-group lst increment" id="increment">
                            <input type="file" name="filenames[]" class="myfrm form-control">

                        </div> --}}

                    <div class="clone hide" id="clone">
                        <div id="realprocode" class="realprocode control-group lst input-group" style="margin-top:10px">

                            {{-- <div id="dvPreview" > --}}

                            <input type="file" name="filenames[]" class="myfrm form-control" id="fileupload" multiple>
                            <div class="input-group-btn">
                                <button class="btn btn-danger" id="hapus" type="button"><i
                                        class="fldemo glyphicon glyphicon-remove"></i>
                                    Remove</button>
                            </div>
                        </div>
                    </div>
                </form>


                {{-- <form id='post-form' class='post-form' method="post" action="{{ url('/dump') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <label for='files'>Select multiple files: </label>
                    <input type="text" value="test" name="iya">
                    <input id='files' name="gambar[]" type='file' multiple />
                    <output id='result' width="100px" height="100px" />
                    <button type="submit">submit</button>
                </form> --}}

                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

                {{-- <script language="javascript" type="text/javascript">
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
                </script> --}}

                <script>
                    // $(document).ready(function() {
                        $("#fileupload").select(function() {
                            var lsthmtl = $("#clone").html();
                            $("#increment").after(lsthmtl);
                        });
                        $("body").on("click", "#hapus", function() {
                            $(this).parents("#realprocode").remove();
                        });
                    // });
                </script>

                {{-- <script type="text/javascript">
                    window.onload = function() {
                        //Check File API support
                        if (window.File && window.FileList && window.FileReader) {
                            var filesInput = document.getElementById("files");
                            filesInput.addEventListener("change", function(event) {
                                var files = event.target.files; //FileList object
                                var output = document.getElementById("result");
                                for (var i = 0; i < files.length; i++) {
                                    var file = files[i];
                                    //Only pics
                                    if (!file.type.match('image'))
                                        continue;
                                    var picReader = new FileReader();
                                    picReader.addEventListener("load", function(event) {
                                        var picFile = event.target;
                                        var div = document.createElement("div");
                                        div.id = 'realprocode'
                                        div.innerHTML = "<img class='thumbnail' src='" + picFile.result +
                                            "' width='100px'" +
                                            "title='" + picFile.name + "'/> " +
                                            "<button class='btn btn-danger' id='hapus' type='button'><i class='fldemo glyphicon glyphicon-remove'></i>Remove</button>";
                                        output.insertBefore(div, null);
                                    });
                                    //Read the image
                                    picReader.readAsDataURL(file);
                                }
                            });
                        } else {
                            console.log("Your browser does not support File API");
                        }
                    }
                </script> --}}

            </div>
        </div>
    </div>
@endsection
