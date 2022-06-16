@extends('Mahasiswa.layout.index')

@section('container')

<div class="col-12 grid-margin stretch-card">
  <div class="card" style="border-radius: 37px; box-shadow: 0px 9px 10px rgba(0, 0, 0, 0.1);">
    <div class="card-body">
      <h4 class="card-title">Status Pekerjaan</h4><br>
      <div class="d-flex">
        <table class="table table-borderless">
          <thead>
            <tr>
              <th scope="col">ID Order</th>
              <th scope="col">Jasa</th>
              <th scope="col">Client</th>
              <th scope="col">Deadline</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">2817</th>
              <td>Desain UI/IX Aplikasi E-Commerce</td>
              <td>Supri Prawira</td>
              <td>22-04-2022</td>
              <td><span class="badge rounded-pill bg-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                  </svg>&nbsp;Menunggu Pembayaran</span></td>
            </tr>
            <tr>
                <th scope="row">2345</th>
                <td>Code Front End Website Pribadi</td>
                <td>Alpiyan Irawan</td>
                <td>11-02-2022</td>
                <td><span class="badge rounded-pill bg-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                    </svg>&nbsp;Project Selesai</span></td>
            </tr>
            <tr>
              <th scope="row">2434</th>
              <td>Desain User Interface Website</td>
              <td>Dinda Romlah</td>
              <td>16-06-2022</td>
              <td>
                <div class="dropdown">
                  <a class="btn dropdown-toggle badge rounded-pill bg-success" type="button" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>&nbsp;On Progress</a>
                  <ul class="btn dropdown-menu">            
                    <li><button type="button" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop1" style="color: black; margin-left: 20px;">Kirim Hasil</button></li>
                    <li class="divider"></li>
                  </ul>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal Kirim Hasil -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboa rd="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header border-0">
              <h5 class="modal-title" id="staticBackdropLabel" style="margin-left:40%;">Kirim Hasil</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="text-align: center;">
              Masukkan link hasil pengerjaan project kepada client!
              <br /><br /><br />
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Link Pengerjaan</span>
                <input type="text" class="form-control" placeholder="Masukkan Link" id="basic-url" aria-describedby="basic-addon3">
              </div> 
          </div>
          <div class="modal-footer border-0">
              <a class="btn" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" style="display: flex; flex-direction: row; justify-content: center; align-items: center; width: 150px; background: #121814; border-radius: 10px; color: whitesmoke; height: 60px; ">Kirim</a>
              <form method="POST" id="logout-form" action="{{ route('logout') }}">
                  @csrf
              </form>
          </div>
      </div>
  </div>
</div>

<!-- script -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection