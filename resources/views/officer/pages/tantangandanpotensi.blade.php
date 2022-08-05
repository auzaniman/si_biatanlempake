@extends('officer.layouts.app')

@section('title')
Tantangan Dan Potensi
@endsection

@section('content')
{{-- Potensi --}}
<div class="row">
  <h5 class="ms-3 mb-3">Potensi</h5>
  @forelse ($getdatapotensi as $item)
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card h-100">
      <div class="card-header bg-transparent p-0 mx-3 mt-3 position-relative z-index-1">
        <button class="btn btn-sm btn-info btn-icon mt-0 btn-3 mb-sm-2 ms-auto" data-bs-toggle="modal" data-bs-target="#modal-form">
          <span class="btn-inner--text">Ubah</span>
        </button>
        <button type="submit" class="btn btn-sm btn-danger btn-icon mt-0 btn-3 mb-sm-2 ms-auto">
          <span class="btn-inner--text">Hapus</span>
        </button>
        <a href="" class="d-block">
          <img src="{{ asset('storage/'.$item->gambar_tdp) }}" class="img-fluid border-radius-xl mb-3" width="300" height="300" alt="ilustrasi sampah">
        </a>
      </div>
      <div class="card-body py-0">
        @if ($item->kategori_tdp = 2)
        <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold">Potensi</span>
        @endif
        <a href="javascript:;" class="card-title h5 d-block text-darker text-capitalize">
          {{$item->judul_tdp}}
        </a>
        <p class="card-description">
          {{$item->desc_tdp}}
        </p>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="card card-plain">
            <div class="card-header pb-0 text-left">
              <h3 class="font-weight-bolder text-info text-gradient">Ubah Data Modal</h3>
            </div>
            <div class="card-body">
              <form role="form text-left" action="{{route('officer.editsettdp', $item->id)}}" enctype="multipart/form-data" method="POST">
                @method('put')
                @csrf
                <label>Gambar</label>
                <div class="input-group mb-3">
                  <input type="file" name="gambar_tdp" id="gambar_tdp" class="form-control" >
                </div>
                <label>Judul</label>
                <div class="input-group mb-3">
                  <input type="text" name="judul_tdp" id="judul_tdp" class="form-control" placeholder="Judul" >
                </div>
                <label>Deskripsi</label>
                <div class="input-group mb-3">
                  <input type="text" name="desc_tdp" id="desc_tdp" class="form-control" placeholder="Deskripsi" >
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Ubah Data</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @empty

  @endforelse
</div>

{{-- Tantangan --}}
<div class="row mt-4">
  <h5 class="ms-3">Tantangan</h5>
  @forelse ($getdatatantangan as $item)
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-header bg-transparent p-0 mx-3 mt-3 position-relative z-index-1">
        <button class="btn btn-sm btn-info btn-icon mt-0 btn-3 mb-sm-2 ms-auto" data-bs-toggle="modal" data-bs-target="#modal-form2">
          <span class="btn-inner--text">Ubah</span>
        </button>
        <button type="submit" class="btn btn-sm btn-danger btn-icon mt-0 btn-3 mb-sm-2 ms-auto">
          <span class="btn-inner--text">Hapus</span>
        </button>
        <a href="" class="d-block">
          <img src="{{ asset('storage/'.$item->gambar_tdp) }}" class="img-fluid border-radius-xl mb-3" width="300" height="300" alt="ilustrasi sampah">
        </a>
      </div>
      <div class="card-body py-0">
        @if ($item->kategori_tdp = 1)
        <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold">Tantangan</span>
        @endif
        <a href="javascript:;" class="card-title h5 d-block text-darker text-capitalize">
          {{$item->judul_tdp}}
        </a>
        <p class="card-description">
          {{$item->desc_tdp}}
        </p>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-form2" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="card card-plain">
            <div class="card-header pb-0 text-left">
              <h3 class="font-weight-bolder text-info text-gradient">Ubah Data Modal</h3>
            </div>
            <div class="card-body">
              <form role="form text-left" action="{{route('officer.editsettdp', $item->id)}}" enctype="multipart/form-data" method="POST">
                @method('put')
                @csrf
                <label>Gambar</label>
                <div class="input-group mb-3">
                  <input type="file" name="gambar_tdp" id="gambar_tdp" class="form-control" >
                </div>
                <label>Judul</label>
                <div class="input-group mb-3">
                  <input type="text" name="judul_tdp" id="judul_tdp" class="form-control" placeholder="Judul" >
                </div>
                <label>Deskripsi</label>
                <div class="input-group mb-3">
                  <input type="text" name="desc_tdp" id="desc_tdp" class="form-control" placeholder="Deskripsi" >
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Ubah Data</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @empty

  @endforelse
</div>
{{-- <div class="row mt-4">
  <div class="col-lg-7 mb-lg-0 mb-4">
    <div class="card ">
      <div class="card-header pb-0 p-3">
        <div class="d-flex justify-content-between">
          <h6 class="mb-2">Sales by Country</h6>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center ">
          <tbody>
            <tr>
              <td class="w-30">
                <div class="d-flex px-2 py-1 align-items-center">
                  <div>
                    <img src="./assets/img/icons/flags/US.png" alt="Country flag">
                  </div>
                  <div class="ms-4">
                    <p class="text-xs font-weight-bold mb-0">Country:</p>
                    <h6 class="text-sm mb-0">United States</h6>
                  </div>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Sales:</p>
                  <h6 class="text-sm mb-0">2500</h6>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Value:</p>
                  <h6 class="text-sm mb-0">$230,900</h6>
                </div>
              </td>
              <td class="align-middle text-sm">
                <div class="col text-center">
                  <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                  <h6 class="text-sm mb-0">29.9%</h6>
                </div>
              </td>
            </tr>
            <tr>
              <td class="w-30">
                <div class="d-flex px-2 py-1 align-items-center">
                  <div>
                    <img src="./assets/img/icons/flags/DE.png" alt="Country flag">
                  </div>
                  <div class="ms-4">
                    <p class="text-xs font-weight-bold mb-0">Country:</p>
                    <h6 class="text-sm mb-0">Germany</h6>
                  </div>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Sales:</p>
                  <h6 class="text-sm mb-0">3.900</h6>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Value:</p>
                  <h6 class="text-sm mb-0">$440,000</h6>
                </div>
              </td>
              <td class="align-middle text-sm">
                <div class="col text-center">
                  <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                  <h6 class="text-sm mb-0">40.22%</h6>
                </div>
              </td>
            </tr>
            <tr>
              <td class="w-30">
                <div class="d-flex px-2 py-1 align-items-center">
                  <div>
                    <img src="./assets/img/icons/flags/GB.png" alt="Country flag">
                  </div>
                  <div class="ms-4">
                    <p class="text-xs font-weight-bold mb-0">Country:</p>
                    <h6 class="text-sm mb-0">Great Britain</h6>
                  </div>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Sales:</p>
                  <h6 class="text-sm mb-0">1.400</h6>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Value:</p>
                  <h6 class="text-sm mb-0">$190,700</h6>
                </div>
              </td>
              <td class="align-middle text-sm">
                <div class="col text-center">
                  <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                  <h6 class="text-sm mb-0">23.44%</h6>
                </div>
              </td>
            </tr>
            <tr>
              <td class="w-30">
                <div class="d-flex px-2 py-1 align-items-center">
                  <div>
                    <img src="./assets/img/icons/flags/BR.png" alt="Country flag">
                  </div>
                  <div class="ms-4">
                    <p class="text-xs font-weight-bold mb-0">Country:</p>
                    <h6 class="text-sm mb-0">Brasil</h6>
                  </div>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Sales:</p>
                  <h6 class="text-sm mb-0">562</h6>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Value:</p>
                  <h6 class="text-sm mb-0">$143,960</h6>
                </div>
              </td>
              <td class="align-middle text-sm">
                <div class="col text-center">
                  <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                  <h6 class="text-sm mb-0">32.14%</h6>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-5">
    <div class="card">
      <div class="card-header pb-0 p-3">
        <h6 class="mb-0">Categories</h6>
      </div>
      <div class="card-body p-3">
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                <i class="ni ni-mobile-button text-white opacity-10"></i>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Devices</h6>
                <span class="text-xs">250 in stock, <span class="font-weight-bold">346+ sold</span></span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                <i class="ni ni-tag text-white opacity-10"></i>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Tickets</h6>
                <span class="text-xs">123 closed, <span class="font-weight-bold">15 open</span></span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                <i class="ni ni-box-2 text-white opacity-10"></i>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Error logs</h6>
                <span class="text-xs">1 is active, <span class="font-weight-bold">40 closed</span></span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                <i class="ni ni-satisfied text-white opacity-10"></i>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Happy users</h6>
                <span class="text-xs font-weight-bold">+ 430</span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div> --}}
@endsection
