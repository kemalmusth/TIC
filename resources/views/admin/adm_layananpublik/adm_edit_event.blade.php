@extends('admin/adm_template/adm_index')
@section('content')

{{-- ini khusu buat tambah/create --}}
<div class="container">
  <form action="/admin/event/{{$data['event']->id}}/uevent" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="mb-3">
      <label for="judul_event" class="form-label">Judul Event</label>
      <input type="text" class="form-control" id="judul_event" placeholder="Masukkan judul event.." value=" {{  old('judul_event') ? old('judul_event') : $data['event']->judul_event }}" name="judul_event">
      @error('judul_event')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="kategori_event" class="form-label">Kategori Event</label>
      <input type="text" class="form-control" id="kategori_event" placeholder="Masukkan kategori event" value=" {{  old('kategori_event') ? old('kategori_event') : $data['event']->kategori_event }}" name="kategori_event">
      @error('kategori_event')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="highlight_event" class="form-label">Highlight Event</label>
      <textarea class="form-control" id="highlight_event" rows="3" name="highlight_event">{{  old('highlight_event') ? old('highlight_event') : $data['event']->highlight_event }}</textarea>
      @error('highlight_event')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="detail_event" class="form-label">Detail Event</label>
      <textarea class="form-control" id="detail_event" rows="3" name="detail_event">{{  old('detail_event') ? old('detail_event') : $data['event']->detail_event }}</textarea>
      @error('detail_event')
          <div class="invalid_feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="form-group row">
      <label for="foto_event" class="col-sm-2 col-form-label">Gambar Event</label>
      <div class="col-sm-2">
          <img src="/img/{{$data['event']->foto_event}}" class="img-thumbnail img-preview">
      </div>
      <div class="col-sm-8">
          <div class="mb-3">
              <label for="foto_event" class="form-label "><b>{{$data['event']->foto_event}}</b></label>
              <input class="form-control-file is-invalid" type="file" id="foto_event" name="foto_event" onchange="previewImage()">
          </div>
      </div>
  </div>
    <button type="submit" class="btn btn-success">Edit</button>
  </form>
</div>
@endsection