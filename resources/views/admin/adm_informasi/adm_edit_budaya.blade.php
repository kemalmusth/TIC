@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
  <form action="/admin/budaya/{{$data['budaya']->id}}/ubudaya" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="mb-3">
      <label for="judul_budaya" class="form-label">Judul Budaya</label>
      <input type="text" class="form-control" id="judul_budaya" placeholder="Masukkan judul budaya.." value=" {{  old('judul_budaya') ? old('judul_budaya') : $data['budaya']->judul_budaya }}" name="judul_budaya">
      @error('judul_budaya')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="kategori_budaya" class="form-label">Kategori Budaya</label>
      <input type="text" class="form-control" id="kategori_budaya" placeholder="Masukkan kategori budaya" value=" {{  old('kategori_budaya') ? old('kategori_budaya') : $data['budaya']->kategori_budaya }}" name="kategori_budaya">
      @error('kategori_budaya')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="highlight_budaya" class="form-label">Highlight Budaya</label>
      <textarea class="form-control" id="highlight_budaya" rows="3" name="highlight_budaya">{{  old('highlight_budaya') ? old('highlight_budaya') : $data['budaya']->highlight_budaya }}</textarea>
      @error('highlight_budaya')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="detail_budaya" class="form-label">Detail Budaya</label>
      <textarea class="form-control" id="detail_budaya" rows="3" name="detail_budaya">{{  old('detail_budaya') ? old('detail_budaya') : $data['budaya']->detail_budaya }}</textarea>
      @error('detail_budaya')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="form-group row">
      <label for="foto_budaya" class="col-sm-2 col-form-label">Gambar Budaya</label>
      <div class="col-sm-2">
          <img src="/img/{{$data['budaya']->foto_budaya}}" class="img-thumbnail img-preview">
      </div>
      <div class="col-sm-8">
          <div class="mb-3">
              <label for="foto_budaya" class="form-label "><b>{{$data['budaya']->foto_budaya}}</b></label>
              <input class="form-control-file is-invalid" type="file" id="foto_budaya" name="foto_budaya" onchange="previewImage()">
          </div>
      </div>
  </div>
    <button type="submit" class="btn btn-success">Edit</button>
  </form>
</div>
@endsection