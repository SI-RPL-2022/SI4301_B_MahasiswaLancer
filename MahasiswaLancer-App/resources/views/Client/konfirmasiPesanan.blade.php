@extends('Client.layout.index')

@section('container')
    <h2 style="padding-top:58px;
          width:fit-content;
          display:block;
          margin:1em auto;">
        <b>Konfirmasi Pesanan Jasa</b>
    </h2>
    <div class="col-12 grid-margin" style="padding-top:70px;">
        <div class="card" style="border-radius: 37px; width:947px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1); left:18em;">
            <div class="card-body">
                <h4 style="width:fit-content;display:block;margin:1em auto;"><b>Ringkasan Pesanan</b> </h4>
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div style="margin-left: 5%; margin-right: 5%; margin-top: 40px; padding-bottom: 60px;">
                        <div class="mb-4">
                            <table class="table table-borderless" style="margin-top: 40px;">
                                <tbody>
                                    <tr>
                                        <th></th>
                                        <th width="800px"></th>
                                        <th width="200px"></th>
                                    </tr>
                                    <tr>
                                        <td><img src="/image/{{ $cover->alamat_gambar }}"
                                                style=" width:200px; height: 130px; margin-bottom: 50px; border-radius: 15px;">
                                        </td>
                                        <td><a><b>Desain {{ $detail_jasa->judul }}</b></a>
                                            <p>
                                            <div class="row p-t-10">
                                                <div class="col-sm-1">
                                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
                                                        alt="..." class="rounded-circle" style="width: 30px;">
                                                </div>
                                                <div class="col">
                                                    <p class="">{{ $user->name }}</p>
                                                </div>
                                            </div>
                                            </p>
                                        </td>
                                        <td class="d-flex">
                                            <p class="card-text"><b>Rp. {{ $detail_jasa->harga }}</b></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr style="width:115%; margin-left:-62px;">
                        <br>
                        <div class="mb-4">
                            <label for="exampleInputNama1" class="form-label"><b>Nama Lengkap Pemesan</b></label>
                            {{-- 840px --}}
                            <input name="judul" style="width:100%; height:43px;" type="text" class="form-control"
                                id="exampleInputNama1" placeholder="Nama Lengkap" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="mb-4">
                            <label class="form-label"><b>Email</b></label>
                            <input name="email" type="email" class="form-control" placeholder="Email"
                                value="{{ Auth::user()->email }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label"><b>No HP</b></label>
                            <input name="NoHP" type="number" class="form-control" placeholder="No HP"
                                value="{{ Auth::user()->no_hp }}">
                        </div>

                        <div class="mb-5">
                            <label for="exampleFormControlDesB1" class="form-label"><b>Deskripsi Pekerjaan</b></label>
                            <textarea name="deskripsi" class="form-control" id="exampleFormControlDesB1" placeholder="Deskripsi Pekerjaan"
                                style="height:200px;"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputNoHP1" class="form-label"><b>Deadline Pengerjaan</b></label>
                            <input type="date" name="tanggal" class="form-control" multiple>
                            {{-- <div class="row">
                              <div class="col" style="margin-right:-300px;">
                                <span>
                                    <select style="width: 135px; height: 37px; display: flex;
                                                    flex-direction: row;
                                                    justify-content: center;
                                                    align-items: center;
                                                    box-sizing: border-box;
                                                    border: 1px solid #5C5C5C;
                                                    border-radius: 6px;" name="day" id="day"></select>
                                
                              </div>
                              <div class="col" style="margin-right:-250px;">
                                <span>
                                    <select style="width: 177px; height: 37px; display: flex;
                                                    flex-direction: row;
                                                    justify-content: center;
                                                    align-items: center;
                                                    box-sizing: border-box;
                                                    border: 1px solid #5C5C5C;
                                                    border-radius: 6px;" name="month" id="month"></select>
                                </span>
                              </div>
                              <div class="col">
                                <span>
                                    <select style="width: 115px; height: 37px; display: flex;
                                                    flex-direction: row;
                                                    justify-content: center;
                                                    align-items: center;
                                                    box-sizing: border-box;
                                                    border: 1px solid #5C5C5C;
                                                    border-radius: 6px;" name="year" id="year"></select>
                                </span>
                              </div>
                            </div> --}}
                        </div>
                        <label for="basic-url">Lampirkan Link File Pendukung (Opsional)</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-link"></i>https://example.com/users/</span>
                            </div>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <button type="submit" class="btn"
                            style="width: 255px; height: 48px; 
                                   background: #151E17; border-radius: 33px; 
                                   color:whitesmoke; margin-top:40px;
                                   margin-left:250px;">Ajukan
                            Pesanan Jasa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    {{-- <script>
  //Create references to the dropdown's
const yearSelect = document.getElementById("year");
const monthSelect = document.getElementById("month");
const daySelect = document.getElementById("day");

const months = ['January', 'February', 'March', 'April', 
'May', 'June', 'July', 'August', 'September', 'October',
'November', 'December'];

//Months are always the same
(function populateMonths(){
    for(let i = 0; i < months.length; i++){
        const option = document.createElement('option');
        option.textContent = months[i];
        monthSelect.appendChild(option);
    }
    monthSelect.value = "January";
})();

let previousDay;

function populateDays(month){
    //Delete all of the children of the day dropdown
    //if they do exist
    while(daySelect.firstChild){
        daySelect.removeChild(daySelect.firstChild);
    }
    //Holds the number of days in the month
    let dayNum;
    //Get the current year
    let year = yearSelect.value;

    if(month === 'January' || month === 'March' || 
    month === 'May' || month === 'July' || month === 'August' 
    || month === 'October' || month === 'December') {
        dayNum = 31;
    } else if(month === 'April' || month === 'June' 
    || month === 'September' || month === 'November') {
        dayNum = 30;
    }else{
        //Check for a leap year
        if(new Date(year, 1, 29).getMonth() === 1){
            dayNum = 29;
        }else{
            dayNum = 28;
        }
    }
    //Insert the correct days into the day <select>
    for(let i = 1; i <= dayNum; i++){
        const option = document.createElement("option");
        option.textContent = i;
        daySelect.appendChild(option);
    }
    if(previousDay){
        daySelect.value = previousDay;
        if(daySelect.value === ""){
            daySelect.value = previousDay - 1;
        }
        if(daySelect.value === ""){
            daySelect.value = previousDay - 2;
        }
        if(daySelect.value === ""){
            daySelect.value = previousDay - 3;
        }
    }
}

function populateYears(){
    //Get the current year as a number
    let year = new Date().getFullYear();
    //Make the previous 100 years be an option
    for(let i = 0; i < 101; i++){
        const option = document.createElement("option");
        option.textContent = year - i;
        yearSelect.appendChild(option);
    }
}

populateDays(monthSelect.value);
populateYears();

yearSelect.onchange = function() {
    populateDays(monthSelect.value);
}
monthSelect.onchange = function() {
    populateDays(monthSelect.value);
}
daySelect.onchange = function() {
    previousDay = daySelect.value;
}
</script> --}}
@endsection
