@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
<form action="/admin/pengumuman" method="post" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
    <label for="judul_pengumuman" class="form-label">Judul Pengumuman</label>
    <input type="text" class="form-control" id="judul_pengumuman" placeholder="Masukkan judul pengumuman.." name="judul_pengumuman">
  </div>
  <div class="mb-3">
    <label for="kategori_pengumuman" class="form-label">Kategori Pengumuman</label>
    <input type="text" class="form-control" id="kategori_pengumuman" placeholder="Masukkan kategori pengumuman" name="kategori_pengumuman">
  </div>
  <div class="mb-3">
    <label for="highlight_pengumuman" class="form-label">Highlight Pengumuman</label>
    <textarea class="form-control" id="highlight_pengumuman" rows="3" name="highlight_pengumuman"></textarea>
  </div>
  <div class="mb-3">
    <label for="detail_pengumuman" class="form-label">Detail Pengumuman</label>
    <textarea class="form-control" id="detail_pengumuman" rows="3" name="detail_pengumuman"></textarea>
  </div>
  <div class="mb-3">
    <label for="foto_pengumuman" class="form-label">Gambar Pengumuman</label>
    <input type="file" class="form-control" id="foto_pengumuman" name="foto_pengumuman"> 
    
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
@endsection