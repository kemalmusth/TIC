@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
<form action="/admin/hotel" method="post" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
    <label for="judul_hotel" class="form-label">Judul Hotel</label>
    <input type="text" class="form-control" id="judul_hotel" placeholder="Masukkan judul hotel.." name="judul_hotel">
  </div>
  <div class="mb-3">
    <label for="harga_hotel" class="form-label">Harga Hotel</label>
    <input type="text" class="form-control" id="harga_hotel" placeholder="Masukkan harga hotel" name="harga_hotel">
  </div>
  <div class="mb-3">
    <label for="highlight_hotel" class="form-label">Highlight Hotel</label>
    <textarea class="form-control" id="highlight_hotel" rows="3" name="highlight_hotel"></textarea>
  </div>
  <div class="mb-3">
    <label for="detail_hotel" class="form-label">Detail Hotel</label>
    <textarea class="form-control" id="detail_hotel" rows="3" name="detail_hotel"></textarea>
  </div>
  <div class="mb-3">
    <label for="foto_hotel" class="form-label">Gambar Hotel</label>
    <input type="file" class="form-control" id="foto_hotel" name="foto_hotel"> 
    
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
@endsection