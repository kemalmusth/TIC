@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
<form action="/admin/budaya" method="post" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
    <label for="judul_budaya" class="form-label">Judul Budaya</label>
    <input type="text" class="form-control" id="judul_budaya" placeholder="Masukkan judul budaya.." name="judul_budaya">
  </div>
  <div class="mb-3">
    <label for="kategori_budaya" class="form-label">Kategori Budaya</label>
    <input type="text" class="form-control" id="kategori_budaya" placeholder="Masukkan kategori budaya" name="kategori_budaya">
  </div>
  <div class="mb-3">
    <label for="highlight_budaya" class="form-label">Highlight Budaya</label>
    <textarea class="form-control" id="highlight_budaya" rows="3" name="highlight_budaya"></textarea>
  </div>
  <div class="mb-3">
    <label for="detail_budaya" class="form-label">Detail Budaya</label>
    <textarea class="form-control" id="detail_budaya" rows="3" name="detail_budaya"></textarea>
  </div>
  <div class="mb-3">
    <label for="foto_budaya" class="form-label">Gambar Budaya</label>
    <input type="file" class="form-control" id="foto_budaya" name="foto_budaya"> 
    
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
@endsection