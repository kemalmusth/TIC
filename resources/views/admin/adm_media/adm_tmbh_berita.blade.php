@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
<form action="/admin/berita" method="post" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
    <label for="judul_berita" class="form-label">Judul Berita</label>
    <input type="text" class="form-control" id="judul_berita" placeholder="Masukkan judul berita.." name="judul_berita">
  </div>
  <div class="mb-3">
    <label for="kategori_berita" class="form-label">Kategori Berita</label>
    <input type="text" class="form-control" id="kategori_berita" placeholder="Masukkan kategori berita" name="kategori_berita">
  </div>
  <div class="mb-3">
    <label for="highlight_berita" class="form-label">Highlight Berita</label>
    <textarea class="form-control" id="highlight_berita" rows="3" name="highlight_berita"></textarea>
  </div>
  <div class="mb-3">
    <label for="detail_berita" class="form-label">Detail Berita</label>
    <textarea class="form-control" id="detail_berita" rows="3" name="detail_berita"></textarea>
  </div>
  <div class="mb-3">
    <label for="foto_berita" class="form-label">Gambar Berita</label>
    <input type="file" class="form-control" id="foto_berita" name="foto_berita"> 
    
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
@endsection