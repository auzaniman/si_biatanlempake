@extends('officer.layouts.app')

@section('title')
Data User
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase">Data User Kampung Biatan Lempake</p>
        <div class="table-responsive">
          <table class="table align-items-center mb-3">
            <thead>
              <tr>
                <th class="px-2 text-uppercase text-secondary text-xxs font-weight-bolder">No</th>
                <th class="px-2 text-uppercase text-secondary text-xxs font-weight-bolder">Nama</th>
                <th class="px-2 text-uppercase text-secondary text-xxs font-weight-bolder">No Identitas</th>
                <th class="px-2 text-uppercase text-secondary text-xxs font-weight-bolder">Kewarganegaraan</th>
                <th class="px-2 text-uppercase text-secondary text-xxs font-weight-bolder">Agama</th>
                <th class="px-2 text-uppercase text-secondary text-xxs font-weight-bolder">Perkawinan</th>
                <th class="px-2 text-uppercase text-secondary text-xxs font-weight-bolder">TTL</th>
                <th class="px-2 text-uppercase text-secondary text-xxs font-weight-bolder">Pendidikan Pekerjaan</th>
                <th class="px-2 text-uppercase text-secondary text-xxs font-weight-bolder">Kontak</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($getdata as $item)
                <tr>
                  <td class="align-middle text-sm">
                    <h6 class="mb-0 text-xs">{{ ++$i }}<h6>
                  </td>
                  <td class="align-middle text-sm">
                    <div class="d-flex flex-column">
                      <h6 class="mb-0 text-xs">{{$item->name}} ({{$item->kelamin}})</h6>
                      <p class="mb-0 text-xs">{{$item->username}} - {{$item->email}}</p>
                    </div>
                  </td>
                  <td class="align-middle text-sm">
                    <div class="d-flex flex-column">
                      <p class="mb-0 text-xs">{{$item->nik}}</p>
                      <p class="mb-0 text-xs">{{$item->kk}} - {{$item->npwp}}</p>
                    </div>
                  </td>
                  <td class="align-middle text-sm">
                    <p class="mb-0 text-xs">{{$item->kewarganegaraan}}</p>
                  </td>
                  <td class="align-middle text-sm">
                    <p class="mb-0 text-xs">{{$item->agama}}</p>
                  </td>
                  <td class="align-middle text-sm">
                    <p class="mb-0 text-xs">{{$item->perkawinan}}, {{$item->jabatan_keluarga}}</p>
                  </td>
                  <td class="align-middle text-sm">
                    <p class="mb-0 text-xs">{{$item->tempat_lahir}}, {{$item->tanggal_lahir}}</p>
                  </td>
                  <td class="align-middle text-sm">
                    <div class="d-flex flex-column">
                      <p class="mb-0 text-xs">{{$item->pendidikan}}, {{$item->jurusan}}</p>
                      <p class="mb-0 text-xs">{{$item->pekerjaan}}}</p>
                    </div>
                  </td>
                  <td class="align-middle text-sm">
                    <div class="d-flex flex-column">
                      <p class="mb-0 text-xs">{{$item->no_telpon}}</p>
                      <p class="mb-0 text-xs">{{$item->no_wa}}</p>
                    </div>
                  </td>
                </tr>
              @empty

              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<button type="button" onclick="history.back()" class="btn btn-warning btn-icon mt-3">
  <span class="btn-inner--icon"><i class="ni ni-bold-left text-white"></i></span>
  <span class="btn-inner--text text-white">Kembali</span>
</button>
@endsection
