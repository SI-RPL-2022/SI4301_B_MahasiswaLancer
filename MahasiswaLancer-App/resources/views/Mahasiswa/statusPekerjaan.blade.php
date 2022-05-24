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
              <td><span class="badge rounded-pill bg-warning">Menunggu Pembayaran</span></td>
            </tr>
            <tr>
                <th scope="row">2345</th>
                <td>Code Front End Website Pribadi</td>
                <td>Alpiyan Irawan</td>
                <td>11-02-2022</td>
                <td><span class="badge rounded-pill bg-danger">Project Selesai</span></td>
            </tr>
            <tr>
              <th scope="row">2434</th>
              <td>Desain User Interface Website</td>
              <td>Dinda Romlah</td>
              <td>16-06-2022</td>
              <td>
                <div class="dropdown">
                  <a class="btn dropdown-toggle badge rounded-pill bg-success" type="button" data-toggle="dropdown">On Progress</a>
                  <ul class="btn dropdown-menu">            
                    <li><a href="#" style="color: black; margin-left: 20px;">Project Selesai</a></li>
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

@endsection