@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
  <form action="/admin/destinasiwisata/{{$data['destinasiwisata']->id}}/udestinasi" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="mb-3">
      <label for="judul_destinasi" class="form-label">Judul Destinasi</label>
      <input type="text" class="form-control" id="judul_destinasi" placeholder="Masukkan judul destinasi.." value=" {{  old('judul_destinasi') ? old('judul_destinasi') : $data['destinasiwisata']->judul_destinasi }}" name="judul_destinasi">
      @error('judul_destinasi')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="kategori_destinasi" class="form-label">Kategori Destinasi</label>
      <input type="text" class="form-control" id="kategori_destinasi" placeholder="Masukkan kategori destinasi" value=" {{  old('kategori_destinasi') ? old('kategori_destinasi') : $data['destinasiwisata']->kategori_destinasi }}" name="kategori_destinasi">
      @error('kategori_destinasi')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="highlight_destinasi" class="form-label">Highlight Destinasi</label>
      <textarea class="form-control" id="highlight_destinasi" rows="3" name="highlight_destinasi">{{  old('highlight_destinasi') ? old('highlight_destinasi') : $data['destinasiwisata']->highlight_destinasi }}</textarea>
      @error('highlight_destinasi')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="detail_destinasi" class="form-label">Detail Destinasi</label>
      <textarea class="form-control" id="detail_destinasi" rows="3" name="detail_destinasi">{{  old('detail_destinasi') ? old('detail_destinasi') : $data['destinasiwisata']->detail_destinasi }}</textarea>
      @error('detail_destinasi')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="form-group row">
      <label for="foto_destinasi" class="col-sm-2 col-form-label">Gambar Destinasi</label>
      <div class="col-sm-2">
          <img src="/img/{{$data['destinasiwisata']->foto_destinasi}}" class="img-thumbnail img-preview">
      </div>
      <div class="col-sm-8">
          <div class="mb-3">
              <label for="foto_destinasi" class="form-label "><b>{{$data['destinasiwisata']->foto_destinasi}}</b></label>
              <input class="form-control-file is-invalid" type="file" id="foto_destinasi" name="foto_destinasi" onchange="previewImage()">
          </div>
      </div>
  </div>
    <button type="submit" class="btn btn-success">Edit</button>
  </form>
</div>
@endsection