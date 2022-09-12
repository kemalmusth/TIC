@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
  <form action="/admin/kuliner/{{$data['kuliner']->id}}/ukuliner" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="mb-3">
      <label for="judul_kuliner" class="form-label">Judul Kuliner</label>
      <input type="text" class="form-control" id="judul_kuliner" placeholder="Masukkan judul kuliner.." value=" {{  old('judul_kuliner') ? old('judul_kuliner') : $data['kuliner']->judul_kuliner }}" name="judul_kuliner">
      @error('judul_kuliner')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="kategori_kuliner" class="form-label">Kategori Kuliner</label>
      <input type="text" class="form-control" id="kategori_kuliner" placeholder="Masukkan kategori kuliner" value=" {{  old('kategori_kuliner') ? old('kategori_kuliner') : $data['kuliner']->kategori_kuliner }}" name="kategori_kuliner">
      @error('kategori_kuliner')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="highlight_kuliner" class="form-label">Highlight Kuliner</label>
      <textarea class="form-control" id="highlight_kuliner" rows="3" name="highlight_kuliner">{{  old('highlight_kuliner') ? old('highlight_kuliner') : $data['kuliner']->highlight_kuliner }}</textarea>
      @error('highlight_kuliner')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="detail_kuliner" class="form-label">Detail Kuliner</label>
      <textarea class="form-control" id="detail_kuliner" rows="3" name="detail_kuliner">{{  old('detail_kuliner') ? old('detail_kuliner') : $data['kuliner']->detail_kuliner }}</textarea>
      @error('detail_kuliner')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="form-group row">
      <label for="foto_kuliner" class="col-sm-2 col-form-label">Gambar Kuliner</label>
      <div class="col-sm-2">
          <img src="/img/{{$data['kuliner']->foto_kuliner}}" class="img-thumbnail img-preview">
      </div>
      <div class="col-sm-8">
          <div class="mb-3">
              <label for="foto_kuliner" class="form-label "><b>{{$data['kuliner']->foto_kuliner}}</b></label>
              <input class="form-control-file is-invalid" type="file" id="foto_kuliner" name="foto_kuliner" onchange="previewImage()">
          </div>
      </div>
  </div>
    <button type="submit" class="btn btn-success">Edit</button>
  </form>
</div>
@endsection