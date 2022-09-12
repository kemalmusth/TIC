@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
  <form action="/admin/pengumuman/{{$data['pengumuman']->id}}/upengumuman" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="mb-3">
      <label for="judul_pengumuman" class="form-label">Judul Pengumuman</label>
      <input type="text" class="form-control" id="judul_pengumuman" placeholder="Masukkan judul pengumuman.." value=" {{  old('judul_pengumuman') ? old('judul_pengumuman') : $data['pengumuman']->judul_pengumuman }}" name="judul_pengumuman">
      @error('judul_pengumuman')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="kategori_pengumuman" class="form-label">Kategori Pengumuman</label>
      <input type="text" class="form-control" id="kategori_pengumuman" placeholder="Masukkan kategori pengumuman" value=" {{  old('kategori_pengumuman') ? old('kategori_pengumuman') : $data['pengumuman']->kategori_pengumuman }}" name="kategori_pengumuman">
      @error('kategori_pengumuman')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="highlight_pengumuman" class="form-label">Highlight Pengumuman</label>
      <textarea class="form-control" id="highlight_pengumuman" rows="3" name="highlight_pengumuman">{{  old('highlight_pengumuman') ? old('highlight_pengumuman') : $data['pengumuman']->highlight_pengumuman }}</textarea>
      @error('highlight_pengumuman')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="detail_pengumuman" class="form-label">Detail Pengumuman</label>
      <textarea class="form-control" id="detail_pengumuman" rows="3" name="detail_pengumuman">{{  old('detail_pengumuman') ? old('detail_pengumuman') : $data['pengumuman']->detail_pengumuman }}</textarea>
      @error('detail_pengumuman')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="form-group row">
      <label for="foto_pengumuman" class="col-sm-2 col-form-label">Gambar Pengumuman</label>
      <div class="col-sm-2">
          <img src="/img/{{$data['pengumuman']->foto_pengumuman}}" class="img-thumbnail img-preview">
      </div>
      <div class="col-sm-8">
          <div class="mb-3">
              <label for="foto_pengumuman" class="form-label "><b>{{$data['pengumuman']->foto_pengumuman}}</b></label>
              <input class="form-control-file is-invalid" type="file" id="foto_pengumuman" name="foto_pengumuman" onchange="previewImage()">
          </div>
      </div>
  </div>
    <button type="submit" class="btn btn-success">Edit</button>
  </form>
</div>
@endsection