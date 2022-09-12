@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
  <form action="/admin/berita/{{$data['berita']->id}}/uberita" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="mb-3">
      <label for="judul_berita" class="form-label">Judul Berita</label>
      <input type="text" class="form-control" id="judul_berita" placeholder="Masukkan judul berita.." value=" {{  old('judul_berita') ? old('judul_berita') : $data['berita']->judul_berita }}" name="judul_berita">
      @error('judul_berita')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="kategori_berita" class="form-label">Kategori Berita</label>
      <input type="text" class="form-control" id="kategori_berita" placeholder="Masukkan kategori berita" value=" {{  old('kategori_berita') ? old('kategori_berita') : $data['berita']->kategori_berita }}" name="kategori_berita">
      @error('kategori_berita')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="highlight_berita" class="form-label">Highlight Berita</label>
      <textarea class="form-control" id="highlight_berita" rows="3" name="highlight_berita">{{  old('highlight_berita') ? old('highlight_berita') : $data['berita']->highlight_berita }}</textarea>
      @error('highlight_berita')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="detail_berita" class="form-label">Detail Berita</label>
      <textarea class="form-control" id="detail_berita" rows="3" name="detail_berita">{{  old('detail_berita') ? old('detail_berita') : $data['berita']->detail_berita }}</textarea>
      @error('detail_berita')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="form-group row">
      <label for="foto_berita" class="col-sm-2 col-form-label">Gambar Berita</label>
      <div class="col-sm-2">
          <img src="/img/{{$data['berita']->foto_berita}}" class="img-thumbnail img-preview">
      </div>
      <div class="col-sm-8">
          <div class="mb-3">
              <label for="foto_berita" class="form-label "><b>{{$data['berita']->foto_berita}}</b></label>
              <input class="form-control-file is-invalid" type="file" id="foto_berita" name="foto_berita" onchange="previewImage()">
          </div>
      </div>
  </div>
    <button type="submit" class="btn btn-success">Edit</button>
  </form>
</div>
@endsection