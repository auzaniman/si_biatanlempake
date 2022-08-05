@extends('officer.layouts.app')

@section('title')
Setting Website
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">

        {{-- Profile Desa --}}
        @if ($getdatapropdesa != null)
        <form method="POST" action="{{route('officer.editsetprofiledesa', $getdatapropdesa->id)}}" enctype="multipart/form-data">
          @method('put')
          @csrf
          <p class="text-uppercase text-sm">Profile Kampung</p>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="sejarah_kampung" class="form-control-label">Sejarah Kampung</label>
                <textarea name="sejarah_kampung" id="sejarah_kampung" class="form-control" type="text" value=""></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="video_desa" class="form-control-label">Video Kampung</label>
                <input name="video_desa" id="video_desa" class="form-control" type="text" value="" placeholder="https://youtube.com/embed/.....">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="img_desa" class="form-control-label">Foto Kampung (Dimensi 1920x467)</label>
                <input name="img_desa" id="img_desa" class="form-control" type="file" value="">
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mt-3">
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Ubah</button>
          </div>
        </form>
        @else
        <form method="POST" action="{{route('officer.setprofiledesa')}}" enctype="multipart/form-data">
          @csrf
          <p class="text-uppercase text-sm">Profile Kampung</p>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="sejarah_kampung" class="form-control-label">Sejarah Kampung</label>
                <textarea name="sejarah_kampung" id="sejarah_kampung" class="form-control" type="text" value=""></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="video_desa" class="form-control-label">Video Kampung</label>
                <input name="video_desa" id="video_desa" class="form-control" type="text" value="" placeholder="https://youtube.com/embed/.....">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="img_desa" class="form-control-label">Foto Kampung</label>
                <input name="img_desa" id="img_desa" class="form-control" type="file" value="">
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mt-3">
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Kirim</button>
          </div>
        </form>
        @endif

        {{-- Tantangan Dan Potensi --}}
        <form method="POST" action="{{route('officer.settdp')}}" enctype="multipart/form-data">
          @csrf
          <p class="text-uppercase text-sm">Tantangan Dan Potensi</p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="kategori_tdp" class="form-control-label">Kategori</label>
                <select class="form-control @error('kategori_tdp') is-invalid @enderror" id="kategori_tdp" name="kategori_tdp">
                  <option value="">== Pilih Kategori ==</option>
                  <option value="1">Tantangan</option>
                  <option value="2">Potensi</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="judul_tdp" class="form-control-label">Judul</label>
                <input name="judul_tdp" id="judul_tdp" class="form-control" type="text" value="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="gambar_tdp" class="form-control-label">Gambar</label>
                <input name="gambar_tdp" id="gambar_tdp" class="form-control" type="file" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="desc_tdp" class="form-control-label">Deskripsi</label>
                <textarea name="desc_tdp" id="desc_tdp" class="form-control" type="text" value=""></textarea>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mt-3">
            <a href="" class="btn btn-info btn-sm">Ubah Data</a>
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Tambah</button>
          </div>
        </form>

        {{-- Rencana Jangka Menengah --}}

        {{-- Agenda --}}

        {{-- Keuangan --}}

      </div>
    </div>
  </div>
</div>
@endsection
