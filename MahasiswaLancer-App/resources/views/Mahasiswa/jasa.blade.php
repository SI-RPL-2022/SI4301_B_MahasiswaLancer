@extends('Mahasiswa.layout.index')

@section('container')
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 37px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1);">
            <div class="card-body">
                <h2 class="card-title">Jasa</h2>
                <a href="{{ route('tambahjasa') }}"><button type="button" class="btn"
                        style="position: absolute; color: #BA181B; left: 80%; top: 32px; background:rgba(186, 24, 27, 0.12); ">+
                        Tambah Jasa</button></a>
                <div class="d-flex">
                    <table class="table table-borderless" style="margin-top: 40px;">
                        <tbody>
                            <tr>
                                <th></th>
                                <th width="800px"></th>
                                <th width="100px"></th>
                            </tr>
                            @foreach ($jasas as $jasa)
                                <tr>
                                    <td><img src="{{ url('image',$jasa->gambar) }}"
                                            style=" width:200px; height: auto; padding-bottom: 50px;"></td>
                                    <td><a><b>{{ $jasa->judul }}</b></a>
                                        <p class="desc">{{ $jasa->deskripsi }}</p>
                                    </td>
                                    <td><a href="{{ route('editjasa',$jasa) }}" style="margin-right: 10px;">
                                            <span style="color: green;">
                                                <i class="fas fa-pen-to-square"></i>
                                            </span>
                                        </a><a href="#">
                                            <span style="color: red;">
                                                <i class="fas fa-trash-can"></i>
                                            </span>
                                        </a></td>
                                </tr>
                            @endforeach

                            {{-- <tr>
                                <td><img src="assetsmhs/images/dashboard/image 50.png"
                                        style="width:200px; height: auto; padding-bottom: 50px;"></td>
                                <td><a><b>Deskripsi Detail Jasa 2</b></a>
                                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras
                                        dictumst ac tortor aliquam faucibus mattis egestas.consectetur adipiscing elit.
                                        Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras
                                        dictumst ac tortor aliquam faucibus mattis egestas.consectetur adipiscing elit.
                                        Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras
                                        dictumst ac tortor aliquam faucibus mattis egestas.consectetur adipiscing elit.
                                        Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras
                                        dictumst ac tortor aliquam faucibus mattis egestas.</p>
                                </td>
                                <td><a href="#" style="margin-right: 10px;">
                                        <span style="color: green;">
                                            <i class="fas fa-pen-to-square"></i>
                                        </span>
                                    </a><a href="#">
                                        <span style="color: red;">
                                            <i class="fas fa-trash-can"></i>
                                        </span>
                                    </a></td>
                            </tr>
                            <tr>
                                <td><img src="assetsmhs/images/dashboard/image 50.png"
                                        style="width:200px; height: auto; padding-bottom: 50px;"></td>
                                <td><a><b>Deskripsi Detail Jasa 3</b></a>
                                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras
                                        dictumst ac tortor aliquam faucibus mattis egestas.consectetur adipiscing elit.
                                        Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras
                                        dictumst ac tortor aliquam faucibus mattis egestas.consectetur adipiscing elit.
                                        Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras
                                        dictumst ac tortor aliquam faucibus mattis egestas.consectetur adipiscing elit.
                                        Tincidunt vestibulum facilisi et rhoncus tempus duis mattis amet id. Amet cras
                                        dictumst ac tortor aliquam faucibus mattis egestas.</p>
                                </td>
                                <td><a href="#" style="margin-right: 10px;">
                                        <span style="color: green;">
                                            <i class="fas fa-pen-to-square"></i>
                                        </span>
                                    </a><a href="#">
                                        <span style="color: red;">
                                            <i class="fas fa-trash-can"></i>
                                        </span>
                                    </a></td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
