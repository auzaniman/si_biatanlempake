<div class="fixed-plugin">
  <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
    <i class="fa fa-home py-2"> </i>
  </a>
  <div class="card shadow-lg">
    <div class="card-header pb-0 pt-3 ">
      <div class="float-start">
        <h5 class="mt-3 mb-0">Kampung Biatan Lempake</h5>
        <p>Kampung Terintegrasi</p>
      </div>
      <div class="float-end mt-4">
        <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
          <i class="fa fa-close"></i>
        </button>
      </div>
    </div>
    <hr class="horizontal dark my-1">
    <div class="card-body pt-sm-3 pt-0 overflow-auto">
      <div class="mt-lg-0 mt-3">
        <a href="{{route('officer.dashboard')}}" class="mb-0 font-weight-bold @if (\Request::is('officer')) active @endif">
          <i class="ni ni-single-02  text-primary text-sm me-1"></i>
           Profile Akun
        </a>
      </div>
      <hr class="horizontal dark my-sm-4">
      <div class="mt-3">
        <a href="{{route('officer.datauser')}}" class="mb-0 font-weight-bold @if (\Request::is('officer/datauser')) active @endif">
          <i class="ni ni-building  text-primary text-sm me-1"></i>
           Data User
        </a>
      </div>
      <hr class="horizontal dark my-sm-4">
      <div class="mt-3">
        <a href="{{route('officer.profiledesa')}}" class="mb-0 font-weight-bold @if (\Request::is('officer/profiledesa')) active @endif">
          <i class="ni ni-building  text-primary text-sm me-1"></i>
           Profile Desa
        </a>
      </div>
      <hr class="horizontal dark my-sm-4">
      <div class="mt-3">
        <a href="{{route('officer.tantangan')}}" class="mb-0 font-weight-bold @if (\Request::is('officer/tdp')) active @endif">
          <i class="ni ni-app  text-primary text-sm me-1"></i>
           Tantangan dan Potensi
        </a>
      </div>
      <hr class="horizontal dark my-sm-4">
      <div class="mt-3">
        <a href="{{route('officer.rencana')}}" class="mb-0 font-weight-bold @if (\Request::is('officer/rjm')) active @endif">
          <i class="ni ni-single-copy-04  text-primary text-sm me-1"></i>
           Rencana Jangka Menengah
        </a>
      </div>
      <hr class="horizontal dark my-sm-4">
      <div class="mt-3">
        <a href="{{route('officer.agenda')}}" class="mb-0 font-weight-bold @if (\Request::is('officer/agenda')) active @endif">
          <i class="ni ni-calendar-grid-58  text-primary text-sm me-1"></i>
           Agenda
        </a>
      </div>
      <hr class="horizontal dark my-sm-4">
      <div class="mt-3">
        <a href="{{route('officer.keuangan')}}" class="mb-0 font-weight-bold @if (\Request::is('officer/keuangan')) active @endif">
          <i class="ni ni-money-coins text-primary text-sm me-1"></i>
           Keuangan
        </a>
      </div>
      <hr class="horizontal dark my-sm-4">
      <div class="mt-3">
        <a href="{{route('officer.layanan')}}" class="mb-0 font-weight-bold @if (\Request::is('officer/layanan')) active @endif">
          <i class="ni ni-collection  text-primary text-sm me-1"></i>
           Layanan
        </a>
      </div>
      <hr class="horizontal dark my-sm-4">
      <div class="mt-3">
        <a href="{{route('officer.setting')}}" class="mb-0 font-weight-bold @if (\Request::is('officer/setting')) active @endif">
          <i class="fa fa-cog text-primary text-sm me-1"></i>
           Setting
        </a>
      </div>
      <div class="copyright mt-4">
         © <script>
            document.write(new Date().getFullYear())
          </script>,
          made by
          <a href="" class="font-weight-bold">Geostera</a>
      </div>
    </div>
  </div>
</div>
