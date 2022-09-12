@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
  <div class="row">
    <div class="col">
        <h3>Tabel Pengumuman</h3>
        <!-- Topbar Search -->
        <form action=" " method="get"
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
          <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Cari ..." name="cari" 
            aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
          </div>
        </form>

        <a href="/admin/pengumuman/tpengumuman" class="btn btn-success">Tambah Data</a>

        <table class="table mt-4">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul Pengumuman</th>
                <th scope="col">Highlight Pengumuman</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data['pengumuman'] as $pengumuman)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td><img src="/img/{{$pengumuman->foto_pengumuman}}" alt="" width="90"></td>
                  <td>{{$pengumuman->judul_pengumuman}}</td>
                  <td>{{$pengumuman->highlight_pengumuman}}</td>
                  <td>
      
                    <a href="/admin/pengumuman/{{$pengumuman->id}}/epengumuman" class="btn btn-primary btn-sm">Edit</a>

                    <form action="/admin/pengumuman/{{$pengumuman->id}}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus pengumuman ini?')">Hapus</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
          <div class="d-flex justify-content-end">
            {!! $data['pengumuman']->links('vendor.pagination.simple-bootstrap-5') !!}
        </div> 
       </div>
    </div>
  </div>


@endsection