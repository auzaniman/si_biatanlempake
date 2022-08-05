@extends('superuser.layouts.app')

@section('title')
Profil Desa
@endsection

@section('content')
{{-- Foto Kampung --}}
<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-body p-0 bg-transparent">
        <div class="row">
          <div class="col-lg-12">
            @if ($setprofile != null)
            <img src="{{ asset('storage/'.$setprofile->img_desa) }}" class="img-fluid border-radius-xl" alt="foto kampung">
            @else
            <img src="" class="img-fluid border-radius-xl" alt="foto kampung">
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Video dan Deskripsi --}}
<div class="row mt-4">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <div class="row">
          <div class="col-lg-5">
            <h6 class="text-capitalize">Video Desa</h6>
            <div class="ratio ratio-16x9">
              @if ($setprofile != null)
              <iframe width="300" height="220" src="{{$setprofile->video_desa}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              @else
              <iframe width="300" height="220" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              @endif
            </div>
          </div>
          <div class="col-lg-7">
            <h6 class="text-capitalize">Sejarah Kampung</h6>
            <p class="mb-3">
              @if ($setprofile != null)
              {{$setprofile->sejarah_kampung}}
              @else

              @endif
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- STATISTIK DESA --}}

{{-- Card Count --}}
<h5 class="mt-4 mb-2">Statistik Desa Biatan Lempake</h5>

<div class="row mb-sm-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Warga</p>
              <h5 class="font-weight-bolder">
               {{$total_warga->ktp}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Domisili</p>
              <h5 class="font-weight-bolder">
               {{$total_warga->domisili}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-file text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Laki-Laki</p>
              <h5 class="font-weight-bolder">
               {{$kelamin->laki}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-male text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Perempuan</p>
              <h5 class="font-weight-bolder">
               {{$kelamin->perempuan}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-female text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- <div class="row mb-sm-4">
  <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-8">
            <div class="numbers">
              <a href="{{route('officer.administrasi')}}" class="mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Warga Umbulharjo</a>
            </div>
            <div class="d-flex">
              <p class="mb-0">
                <span class="font-weight-bolder me-1">{{$umbulharjo}}</span>
                Total
              </p>
              <p class="mb-0 ms-4">
                <span class="font-weight-bolder me-1">0</span>
                RW
              </p>
              <p class="mb-0 ms-4">
                <span class="font-weight-bolder me-1">0</span>
                RT
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">UmbulHarjo</p>
              <h5 class="font-weight-bolder">
               {{$umbulharjo}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-file text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}

{{-- Chart --}}
<div class="row mt-4">
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card h-100">
      {{-- Chart --}}
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Penduduk Berdasarkan RT</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="bar-chart" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
      {{-- End Chart --}}
    </div>
  </div>
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Pendudukan Berdasarkan Tingkat Pendidikan</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="pie-chart" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Pendudukan Berdasarkan Mata Pencaharian</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="pie-chart2" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('chart')
{{-- Chart Warga --}}
<script>
  var ctx = document.getElementById("bar-chart").getContext("2d");
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: {!!json_encode($rt)!!},
      datasets: [
        {
          label: "Warga",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: "#3A416F",
          data: {!!json_encode($jmlwarga)!!},
          fill: false,
          maxBarThickness: 35
        }, {
          label: "Kepala Keluarga",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: "#3B416F",
          data: {!!json_encode($jmlkepala)!!},
          fill: false,
          maxBarThickness: 35
        },
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false
        }
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7"
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: true
          },
          ticks: {
            display: true,
            color: "#9ca2b7",
            padding: 10
          }
        }
      }
    }
  });
  // const ctx = document.getElementById('bar-chart').getContext("2d");
  // new Chart(ctx, {
  //   type: 'bar',
  //   data: {
  //     labels: {!!json_encode($rt)!!},
  //     datasets: [{
  //       label: 'Warga',
  //       data: {!!json_encode($jmlwarga)!!},
  //       backgroundColor: [
  //         'rgba(255, 99, 132, 0.2)',
  //       ],
  //       borderColor: [
  //         'rgba(255, 99, 132, 1)',
  //         'rgba(255, 99, 132, 1)',
  //         'rgba(255, 99, 132, 1)',
  //         'rgba(255, 99, 132, 1)'
  //       ],
  //       borderWidth: 1
  //       }, {
  //       label: 'Kepala Keluarga',
  //       data: {!!json_encode($jmlkepala)!!},
  //       backgroundColor: [
  //         'rgba(54, 162, 235, 0.2',
  //         'rgba(54, 162, 235, 0.2)',
  //         'rgba(54, 162, 235, 0.2',
  //         'rgba(54, 162, 235, 0.2'
  //       ],
  //       borderColor: [
  //         'rgba(54, 162, 235, 1)',
  //       ],
  //       borderWidth: 1
  //     }]
  //   },
  //   options: {
  //     scales: {
  //       y: {
  //         beginAtZero: true
  //       }
  //     }
  //   }
  // });
</script>

{{-- Chart Pendidikan --}}
<script>
  const ctx2 = document.getElementById('pie-chart').getContext("2d");
  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: ['SD','SMP','SMA', 'D1','D2','D3', 'D4', 'S1','S2','S3'],
      datasets: [{
        data: [
          {!!json_encode($sd)!!},
          {!!json_encode($smp)!!},
          {!!json_encode($sma)!!},
          {!!json_encode($d1)!!},
          {!!json_encode($d2)!!},
          {!!json_encode($d3)!!},
          {!!json_encode($d4)!!},
          {!!json_encode($s1)!!},
          {!!json_encode($s2)!!},
          {!!json_encode($s3)!!},
          ],
        backgroundColor: [
          "#17c1e8",
          "#5e72e4",
          "#3A416F",
          "#a8b8d8",
          "#17c1e8",
          "#5e72e4",
          "#3A416F",
          "#a8b8d8",
          "#17c1e8",
          "#5e72e4",
        ],
        hoverOffset: 4
        },
      ]
    },
  });
</script>

<script>
  const ctx3 = document.getElementById('pie-chart2').getContext("2d");
  new Chart(ctx3, {
    type: 'pie',
    data: {
      labels: [
        'Petani',
        'Pedagang',
        'Tukang Kayu',
        'Pegawai Perusahaan Sawit',
        'Guru SD',
        'PNS'
      ],
      datasets: [{
        data: [337, 14, 20, 25, 11, 5],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)',
          'rgb(150, 34, 65)',
          'rgb(200, 25, 100)',
          'rgb(90, 77, 43)',
        ],
        hoverOffset: 4
      }]
    }
  })
</script>
@endpush
