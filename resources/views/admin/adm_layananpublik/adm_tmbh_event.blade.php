@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
<form action="/admin/event" method="post" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
    <label for="judul_event" class="form-label">Judul Event</label>
    <input type="text" class="form-control" id="judul_event" placeholder="Masukkan judul event.." name="judul_event">
  </div>
  <div class="mb-3">
    <label for="kategori_event" class="form-label">Kategori Event</label>
    <input type="text" class="form-control" id="kategori_event" placeholder="Masukkan kategori event" name="kategori_event">
  </div>
  <div class="mb-3">
    <label for="highlight_event" class="form-label">Highlight Event</label>
    <textarea class="form-control" id="highlight_event" rows="3" name="highlight_event"></textarea>
  </div>
  <div class="mb-3">
    <label for="detail_event" class="form-label">Detail Event</label>
    <textarea class="form-control" id="detail_event" rows="3" name="detail_event"></textarea>
  </div>
  <div class="mb-3">
    <label for="foto_event" class="form-label">Gambar Event</label>
    <input type="file" class="form-control" id="foto_event" name="foto_event"> 
    
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
@endsection