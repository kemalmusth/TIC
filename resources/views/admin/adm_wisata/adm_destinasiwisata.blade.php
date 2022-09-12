@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
  <div class="row">
    <div class="col">
        <h3>Tabel Destinasi Wisata</h3>
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

        <a href="/admin/destinasiwisata/tdestinasi" class="btn btn-success">Tambah Data</a>

        <table class="table mt-4">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul Destinasi</th>
                <th scope="col">Highlight Destinasi</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data['destinasiwisata'] as $destinasi)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td><img src="/img/{{$destinasi->foto_destinasi}}" alt="" width="90"></td>
                  <td>{{$destinasi->judul_destinasi}}</td>
                  <td>{{$destinasi->highlight_destinasi}}</td>
                  <td>
      
                    <a href="/admin/destinasiwisata/{{$destinasi->id}}/edestinasi" class="btn btn-primary btn-sm">Edit</a>

                    <form action="/admin/destinasiwisata/{{$destinasi->id}}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus destinasiwisata ini?')">Hapus</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
          <div class="pagination justify-content-end">
            {!! $data['destinasiwisata']->links('vendor.pagination.simple-bootstrap-5') !!}
          </div>
       </div>
    </div>
  </div>


@endsection