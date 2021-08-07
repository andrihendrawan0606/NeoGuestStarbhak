@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>Data Tamu Wali Murid</h4>
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
              <th>Nama Wali</th>
              <th>Nama Siswa</th>
              <th>Kelas</th>
              <th>Keperluan</th>
              <th>Tujuan</th>
              <th>Suhu Tubuh</th>
              <th>Status</th>
              <th>Tgl</th>
              <th>Action</th>
            </tr>
            @foreach ($walimurid as $item)
                
           
            <tr>
              <td>{{$item->nama_walimurid}}</td>
              <td>{{$item->nama_siswa}}</td>
              <td>{{$item->kelas}}</td>
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
              <td>{{$item->tgl_post}}</td>
              <td><a href="#" class="btn btn-secondary">Tanggapi</a></td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection