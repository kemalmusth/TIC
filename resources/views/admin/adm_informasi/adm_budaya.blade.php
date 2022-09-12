@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
  <div class="row">
    <div class="col">
        <h3>Tabel Budaya</h3>
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

        <a href="/admin/budaya/tbudaya" class="btn btn-success">Tambah Data</a>

        <table class="table mt-4">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul Budaya</th>
                <th scope="col">Highlight Budaya</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data['budaya'] as $budaya)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td><img src="/img/{{$budaya->foto_budaya}}" alt="" width="90"></td>
                  <td>{{$budaya->judul_budaya}}</td>
                  <td>{{$budaya->highlight_budaya}}</td>
                  <td>
      
                    <a href="/admin/budaya/{{$budaya->id}}/ebudaya" class="btn btn-primary btn-sm">Edit</a>

                    <form action="/admin/budaya/{{$budaya->id}}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus budaya ini?')">Hapus</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
          <div class="d-flex justify-content-end">
            {!! $data['budaya']->links('vendor.pagination.simple-bootstrap-5') !!}
        </div> 
       </div>
    </div>
  </div>


@endsection