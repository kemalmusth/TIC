@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
<form action="/admin/kuliner" method="post" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
    <label for="judul_kuliner" class="form-label">Judul Kuliner</label>
    <input type="text" class="form-control" id="judul_kuliner" placeholder="Masukkan judul kuliner.." name="judul_kuliner">
  </div>
  <div class="mb-3">
    <label for="kategori_kuliner" class="form-label">Kategori Kuliner</label>
    <input type="text" class="form-control" id="kategori_kuliner" placeholder="Masukkan kategori kuliner" name="kategori_kuliner">
  </div>
  <div class="mb-3">
    <label for="highlight_kuliner" class="form-label">Highlight Kuliner</label>
    <textarea class="form-control" id="highlight_kuliner" rows="3" name="highlight_kuliner"></textarea>
  </div>
  <div class="mb-3">
    <label for="detail_kuliner" class="form-label">Detail Kuliner</label>
    <textarea class="form-control" id="detail_kuliner" rows="3" name="detail_kuliner"></textarea>
  </div>
  <div class="mb-3">
    <label for="foto_kuliner" class="form-label">Gambar Kuliner</label>
    <input type="file" class="form-control" id="foto_kuliner" name="foto_kuliner"> 
    
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
@endsection