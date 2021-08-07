@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Tamu Perusahaan</title>
</head>
<body>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Tamu Perusahaan</h4>
              <div class="card-header-form">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tr>
                    <th>Nama Perusahaan</th>
                    <th>Jumlah Anggota</th>
                    <th>Nama Penanggung Jawab</th>
                    <th>Keperluan</th>
                    <th>Tujuan</th>
                    <th>Suhu Tubuh</th>
                    <th>Status</th>
                    <th>Tgl</th>
                    <th>Action</th>
                  </tr>
                  @foreach ($perusahaan as $item)
                      
                 
                  <tr>
                    <td>{{$item->nama_perusahaan}}</td>
                    <td>{{$item->jumlah_anggota}}</td>
                    <td>{{$item->nama_penanggungjawab}}</td>
                    <td>{{$item->keperluan}}</td>
                    <td>{{$item->tujuan}}</td>
                    <td>{{$item->suhu_tubuh}}</td>
                    @if ($item->status === 'selesai')
                    <td><span class="badge badge-success">Succes</span></td>
                      @elseif($item->status === 'proses')
                      <td><span class="badge badge-warning">Proses</span></td>
                      @elseif($item->status === '0')
                          <td><span class="badge badge-danger">Failed</span></td>
                      @endif
                  </tr>
                    <td>{{$item->tgl_post}}}</td>
                    <td>  <button class="btn btn-primary " type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Tanggapi
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item has-icon" href="#"><i class="far fa-heart"></i> Action</a>
                      <a class="dropdown-item has-icon" href="#"><i class="far fa-file"></i> Another action</a>
                      <a class="dropdown-item has-icon" href="#"><i class="far fa-clock"></i> Something else here</a>
                    </div></td>
                  </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>

@endsection