@extends('superuser.layouts.app')

@section('title')
Keuangan
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card ">
      <div class="card-header pb-0">
        <div class="d-flex justify-content-between">
          <h6 class="mb-2">Pendapatan dan Pengeluaran Desa 2021</h6>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center ">
          <thead>
            <tr>
              <th class="text-uppercase font-weight-bolder">Sumber Pendapatan</th>
              <th class="text-uppercase font-weight-bolder ps-2">Nominal</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($pendapatan as $item)
              <tr>
                <td>
                  <p class="mb-0 px-3">{{$item->nama_anggaran}}</p>
                </td>
                <td>
                  <p class="font-weight-bold mb-0">@currency($item->jumlah_nominal)</p>
                </td>
              </tr>
            @empty
            @endforelse
            <tr>
              <td>
                <p class="mb-0 px-3 font-weight-bolder">Total</p>
              </td>
              <td>
                <p class="font-weight-bold mb-0">
                  @if ($get_total_pendapatan == 0)
                    -
                  @else
                    @currency($get_total_pendapatan)
                  @endif
                </p>
              </td>
            </tr>

            <thead style="border-top: 5px solid #dee2e6">
              <tr>
                <th class="text-uppercase font-weight-bolder">Perihal Pengeluaran</th>
                <th class="text-uppercase font-weight-bolder ps-2">Nominal</th>
              </tr>
            </thead>
            @forelse ($pengeluaran as $item)
              <tr>
                <td>
                  <p class="mb-0 px-3">{{$item->nama_anggaran}}</p>
                </td>
                <td>
                  <p class="font-weight-bold mb-0">@currency($item->jumlah_nominal)</p>
                </td>
              </tr>
            @empty
            @endforelse
            <tr>
              <td>
                <p class="mb-0 px-3 font-weight-bolder">Total</p>
              </td>
              <td>
                @if ($get_total_pengeluaran == 0)
                    -
                  @else
                    @currency($get_total_pengeluaran)
                  @endif
              </td>
            </tr>

            <tr style="border-top: 5px solid #dee2e6">
              <td>
                <p class="font-weight-bold mb-0 px-3">Sisa Keuangan Desa</p>
              </td>
              <td>
                @if ($get_sisa_keuangan == 0)
                    -
                  @else
                    @currency($get_sisa_keuangan)
                  @endif
              </td>
            </tr>
            <tr>
              <td class="pb-0">
                <p class="font-weight-bold mb-0 px-3">Status keuangan</p>
              </td>
              <td class="pb-0">
                <p class="font-weight-bold mb-0">-</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-6 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Sumber Pendapatan Desa</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="pie-chart3" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Pengeluaran Desa</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="pie-chart4" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('chart_keuangan')
<script>
  const ctx4 = document.getElementById('pie-chart3').getContext("2d");
  new Chart(ctx4, {
    type: 'pie',
    data: {
      labels: {!!json_encode($pendapatan_anggaran)!!},
      datasets: [{
        data: {!!json_encode($pendapatan_nominal)!!},
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)',
          'rgb(150, 34, 65)',
        ],
        hoverOffset: 4
      }]
    }
  })
</script>

<script>
  const ctx5 = document.getElementById('pie-chart4').getContext("2d");
  new Chart(ctx5, {
    type: 'pie',
    data: {
      labels: {!!json_encode($pengeluaran_anggaran)!!},
      datasets: [{
        data: {!!json_encode($pengeluaran_nominal)!!},
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)',
          'rgb(150, 34, 65)',
          'rgb(200, 25, 100)',
        ],
        hoverOffset: 4
      }]
    }
  })
</script>
@endpush
