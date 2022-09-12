@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
  <form action="/admin/blogwisata/{{$data['blogwisata']->id}}/ublog" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="mb-3">
      <label for="judul_blog" class="form-label">Judul Blog</label>
      <input type="text" class="form-control" id="judul_blog" placeholder="Masukkan judul blog.." value=" {{  old('judul_blog') ? old('judul_blog') : $data['blogwisata']->judul_blog }}" name="judul_blog">
      @error('judul_blog')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="kategori_blog" class="form-label">Kategori Blog</label>
      <input type="text" class="form-control" id="kategori_blog" placeholder="Masukkan kategori blog" value=" {{  old('kategori_blog') ? old('kategori_blog') : $data['blogwisata']->kategori_blog }}" name="kategori_blog">
      @error('kategori_blog')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="highlight_blog" class="form-label">Highlight Blog</label>
      <textarea class="form-control" id="highlight_blog" rows="3" name="highlight_blog">{{  old('highlight_blog') ? old('highlight_blog') : $data['blogwisata']->highlight_blog }}</textarea>
      @error('highlight_blog')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="detail_blog" class="form-label">Detail Blog</label>
      <textarea class="form-control" id="detail_blog" rows="3" name="detail_blog">{{  old('detail_blog') ? old('detail_blog') : $data['blogwisata']->detail_blog }}</textarea>
      @error('detail_blog')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="form-group row">
      <label for="foto_blog" class="col-sm-2 col-form-label">Gambar Blog</label>
      <div class="col-sm-2">
          <img src="/img/{{$data['blogwisata']->foto_blog}}" class="img-thumbnail img-preview">
      </div>
      <div class="col-sm-8">
          <div class="mb-3">
              <label for="foto_blog" class="form-label "><b>{{$data['blogwisata']->foto_blog}}</b></label>
              <input class="form-control-file is-invalid" type="file" id="foto_blog" name="foto_blog" onchange="previewImage()">
          </div>
      </div>
  </div>
    <button type="submit" class="btn btn-success">Edit</button>
  </form>
</div>
@endsection