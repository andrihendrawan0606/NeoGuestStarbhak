@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="row">
      <div class="col-12">
        <div class="card card-chart">
            <div class="row">
              <div class="col-sm-12 text-left">
                <div class="section-title mt-2 ml-4">Data Pengunjung terakhir</div>
                    <div class="table-responsive" style="overflow-x: hidden;">
                      <table class="table table-sm ml-3 mt-2">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tujuan</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Nama Perwakilan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Bertemu dengan Bu Fatima</td>
                            <td>Wali Murid</td>
                            <td>Kiwil</td>
                            <td>2021 - 04 - 20</td>
                            <td><div class="badge badge-success">Succes</div></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Bertemu dengan Pak Agus</td>
                            <td>Wali Murid</td>
                            <td>Angkasa</td>
                            <td>2021 - 06 - 09</td>
                            <td><div class="badge badge-success">Succes</div></td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Bertemu dengan Pak Eraldo</td>
                            <td>Wali Murid</td>
                            <td>Andhika</td>
                            <td>2021 - 08 - 13</td>
                            <td><div class="badge badge-warning">In Proggres</div></td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Menjalin Kerjasama </td>
                            <td>Perusahaan</td>
                            <td>Ikhsan</td>
                            <td>2021 - 08 - 14</td>
                            <td><div class="badge badge-danger">Failed</div></td>
                          </tr>
                        </tbody>
                      </table>
                   
                  </div>


{{-- 
                <div class="table-responsive">
                  <table class="table table-striped">
                    <tr>
                      <th class="text-center pt-2">
                      </th>
                      <th>Tujuan</th>
                      <th>Kategori</th>
                      <th>Nama Tamu</th>
                      <th>Created At</th>
                      <th>Status</th>
                    </tr>
                    <tr>
                      <td>
                      </td>
                      <td>Bertemu dengan Bu Fatima
                      </td>
                      <td>
                        <a href="#">Wali Murid</a>
                      </td>
                      <td>
                        <a href="#">
                          <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
                        </a>
                      </td>
                      <td>2018-01-20</td>
                      <td><div class="badge badge-primary">Published</div></td>
                    </tr>
                    <tr>
                      <td>

                      </td>
                      <td>Bertemu dengan Pak Agus
                      </td>
                      <td>
                        <a href="#">Wali Murid</a>
                      </td>
                      <td>
                        <a href="#">
                          <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
                        </a>
                      </td>
                      <td>2018-01-20</td>
                      <td><div class="badge badge-primary">Published</div></td>
                    </tr>
                    <tr>
                      <td>

                      </td>
                      <td>Bertemu dengan Pak Eraldo
                      </td>
                      <td>
                        <a href="#">Wali Murid</a>
                      </td>
                      <td>
                        <a href="#">
                          <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
                        </a>
                      </td>
                      <td>2018-01-20</td>
                      <td><div class="badge badge-primary">Published</div></td>
                    </tr>
                    <tr>
                      <td>
                      </td>
                      <td>Menjalin kerja sama
                      </td>
                      <td>
                        <a href="#">Perusahaan</a>
                      </td>
                      <td>
                        <a href="#">
                          <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
                        </a>
                      </td>
                      <td>2018-01-20</td>
                      <td><div class="badge badge-danger">Draft</div></td>
                    </tr>
                    <tr>
                      <td>

                      </td>
                      <td>Menjalin kerja sama

                      </td>
                      <td>
                        <a href="#">Perusahaan</a>
                      </td>
                      <td>
                        <a href="#">
                          <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
                        </a>
                      </td>
                      <td>2018-01-20</td>
                      <td><div class="badge badge-warning">Pending</div></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div> --}}
          <div class="card-body">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Tamu ( Wali Murid )</h4>
            </div>
            <div class="card-body">
              {{ DB::table('walimurid')->count()}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Tamu ( Perusahaan )</h4>
            </div>
            <div class="card-body">
              {{ DB::table('perusahaan')->count()}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Admin</h4>
            </div>
            <div class="card-body">
              {{ DB::table('users')->count()}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-circle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Online Tamu</h4>
            </div>
            <div class="card-body">
              4
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection