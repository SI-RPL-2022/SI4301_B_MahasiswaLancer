@props(['submit'])

<div {{ $attributes->merge(['class' => 'row']) }}>
    {{-- <div class="col-md-4">
        <x-jet-section-title>
            <x-slot name="title">{{ $title }}</x-slot>
            <x-slot name="description">
                <span class="small">
                    {{ $description }}
                </span>
            </x-slot>
        </x-jet-section-title>
    </div> --}}
    
    {{-- <div class="col-md-8">
        <div class="card shadow-sm">
            <form wire:submit.prevent="{{ $submit }}">
                <div class="card-body">
                {{ $form }}
                </div>

                @if (isset($actions))
                    <div class="card-footer d-flex justify-content-end">
                        {{ $actions }}
                    </div>
                @endif
            </form>
        </div>
    </div> --}}

    <div class="col-12 grid-margin">
        <div class="card"
            style="border-radius: 37px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1); width: 947px; margin-top: 124px; margin-left:112px;">
            {{-- <div class="card-body"> --}}

                <form wire:submit.prevent="{{ $submit }}">
                    <div class="card-body">
                    {{ $form }}
                    </div>
    
                    @if (isset($actions))
                        <div class="card-footer d-flex justify-content-end">
                            {{ $actions }}
                        </div>
                    @endif
                </form>

                {{-- <img src="assetsmhs/images/faces/face27.jpg" alt="..."
                    style="border-radius: 50%; margin-left: 38%; width:180px; height: auto; margin-top:-135px;">
                <a class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="position: absolute; left: 408px; top: 100px;">Edit Photo</a> --}}
                
                {{-- <div class="d-flex">

                    <form>
                        <div style="margin-left: 75px; margin-top: 90px;">
                            <div class="mb-4">
                                <label for="exampleInputNama1" class="form-label"><b>Nama
                                        Lengkap</b></label>
                                <input style="width:740px; height:43px; border-radius: 6px;" type="text"
                                    class="form-control" id="exampleInputNama1"
                                    placeholder="Nama Lengkap">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1"
                                    class="form-label"><b>Email</b></label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Email">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputNoHP1" class="form-label"><b>No
                                        Hp</b></label>
                                <input type="email" class="form-control" id="exampleInputNoHP1"
                                    placeholder="No Hp">
                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlDesB1"
                                    class="form-label"><b>Deskripsi Biodata</b></label>
                                <textarea class="form-control" id="exampleFormControlDesB1" placeholder="Deskripsi Biodata"
                                    style="height:271px;"></textarea>
                            </div>
                            <button type="submit" class="btn"
                                style="width: 176px; height: 48px; background: #151E17; border-radius: 33px; color:whitesmoke;">Simpan</button>
                        </div>
                    </form>

                </div> --}}
            {{-- </div> --}}
        </div>
    </div>

</div>
