@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
<form action="/admin/destinasiwisata" method="post" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
    <label for="judul_destinasi" class="form-label">Judul Destinasi</label>
    <input type="text" class="form-control" id="judul_destinasi" placeholder="Masukkan judul destinasi.." name="judul_destinasi">
  </div>
  <div class="mb-3">
    <label for="kategori_destinasi" class="form-label">Kategori Destinasi</label>
    <input type="text" class="form-control" id="kategori_destinasi" placeholder="Masukkan kategori destinasi" name="kategori_destinasi">
  </div>
  <div class="mb-3">
    <label for="highlight_destinasi" class="form-label">Highlight Destinasi</label>
    <textarea class="form-control" id="highlight_destinasi" rows="3" name="highlight_destinasi"></textarea>
  </div>
  <div class="mb-3">
    <label for="detail_destinasi" class="form-label">Detail Destinasi</label>
    <textarea class="form-control" id="detail_destinasi" rows="3" name="detail_destinasi"></textarea>
  </div>
  <div class="mb-3">
    <label for="foto_destinasi" class="form-label">Gambar Destinasi</label>
    <input type="file" class="form-control" id="foto_destinasi" name="foto_destinasi"> 
    
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
@endsection