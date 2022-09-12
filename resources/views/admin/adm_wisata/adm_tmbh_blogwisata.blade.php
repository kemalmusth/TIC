@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
<form action="/admin/blogwisata" method="post" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
    <label for="judul_blog" class="form-label">Judul Blog</label>
    <input type="text" class="form-control" id="judul_blog" placeholder="Masukkan judul blog.." name="judul_blog">
  </div>
  <div class="mb-3">
    <label for="kategori_blog" class="form-label">Kategori Blog</label>
    <input type="text" class="form-control" id="kategori_blog" placeholder="Masukkan kategori blog" name="kategori_blog">
  </div>
  <div class="mb-3">
    <label for="highlight_blog" class="form-label">Highlight Blog</label>
    <textarea class="form-control" id="highlight_blog" rows="3" name="highlight_blog"></textarea>
  </div>
  <div class="mb-3">
    <label for="detail_blog" class="form-label">Detail Blog</label>
    <textarea class="form-control" id="detail_blog" rows="3" name="detail_blog"></textarea>
  </div>
  <div class="mb-3">
    <label for="foto_blog" class="form-label">Gambar Blog</label>
    <input type="file" class="form-control" id="foto_blog" name="foto_blog"> 
    
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
@endsection