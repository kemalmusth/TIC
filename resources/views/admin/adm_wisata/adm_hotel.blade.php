@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
  <div class="row">
    <div class="col">
        <h3>Tabel Hotel</h3>
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

        <a href="/admin/hotel/thotel" class="btn btn-success">Tambah Data</a>

        <table class="table mt-4">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul Hotel</th>
                <th scope="col">Harga Hotel</th>
                <th scope="col">Alamat Hotel</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data['hotel'] as $hotel)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td><img src="/img/{{$hotel->foto_hotel}}" alt="" width="90"></td>
                <td>{{$hotel->judul_hotel}}</td>
                <td>{{$hotel->harga_hotel}}</td>
                <td>{{$hotel->highlight_hotel}}</td>
                <td>
                
                  <a href="/admin/hotel/{{$hotel->id}}/ehotel" class="btn btn-primary btn-sm">Edit</a>

                  <form action="/admin/hotel/{{$hotel->id}}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus hotel ini?')">Hapus</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="pagination justify-content-end">
            {!! $data['hotel']->links('vendor.pagination.simple-bootstrap-5') !!}
          </div>
       </div>
    </div>
  </div>
@endsection