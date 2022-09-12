@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
  <form action="/admin/hotel/{{$data['hotel']->id}}/uhotel" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="mb-3">
      <label for="judul_hotel" class="form-label">Judul Hotel</label>
      <input type="text" class="form-control" id="judul_hotel" placeholder="Masukkan judul hotel.." value=" {{  old('judul_hotel') ? old('judul_hotel') : $data['hotel']->judul_hotel }}" name="judul_hotel">
      @error('judul_hotel')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="harga_hotel" class="form-label">Harga Hotel</label>
      <input type="text" class="form-control" id="harga_hotel" placeholder="Masukkan harga hotel" value=" {{  old('harga_hotel') ? old('harga_hotel') : $data['hotel']->harga_hotel }}" name="harga_hotel">
      @error('harga_hotel')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="highlight_hotel" class="form-label">Highlight Hotel</label>
      <textarea class="form-control" id="highlight_hotel" rows="3" name="highlight_hotel">{{  old('highlight_hotel') ? old('highlight_hotel') : $data['hotel']->highlight_hotel }}</textarea>
      @error('highlight_hotel')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="detail_hotel" class="form-label">Detail Hotel</label>
      <textarea class="form-control" id="detail_hotel" rows="3" name="detail_hotel">{{  old('detail_hotel') ? old('detail_hotel') : $data['hotel']->detail_hotel }}</textarea>
      @error('detail_hotel')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="form-group row">
      <label for="foto_hotel" class="col-sm-2 col-form-label">Gambar Hotel</label>
      <div class="col-sm-2">
          <img src="/img/{{$data['hotel']->foto_hotel}}" class="img-thumbnail img-preview">
      </div>
      <div class="col-sm-8">
          <div class="mb-3">
              <label for="foto_hotel" class="form-label "><b>{{$data['hotel']->foto_hotel}}</b></label>
              <input class="form-control-file is-invalid" type="file" id="foto_hotel" name="foto_hotel" onchange="previewImage()">
          </div>
      </div>
  </div>
    <button type="submit" class="btn btn-success">Edit</button>
  </form>
</div>
@endsection