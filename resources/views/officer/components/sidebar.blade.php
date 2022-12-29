{{-- <div class="min-height-300 bg-primary position-absolute w-100"></div> --}}
{{-- <div class="position-absolute w-100 min-height-300" style="background-position-y: 50%;">
  <span class="mask bg-primary opacity-6"></span>
</div> --}}
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 z-index-1" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="" target="_blank">
      <img src="{{url('backend/assets/img/logo-ct-dark.png')}}" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">Biatan Lempake</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class=" w-auto ">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link nav-active @if (\Request::is('officer')) active @endif" href="{{route('officer.dashboard')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-active @if (\Request::is('officer/datausers')) active @endif" href="{{route('officer.datauser')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-circle-08 text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Data User</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-active @if (\Request::is('officer/profiledesa')) active @endif" href="{{route('officer.profiledesa')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-calendar-grid-58 text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Profil Kampung</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-active @if (\Request::is('officer/tdp')) active @endif" href="{{route('officer.tantangan')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-credit-card text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Tantangan dan Potensi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-active @if (\Request::is('officer/rjm')) active @endif" href="{{route('officer.rencana')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-app text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Rencana Jangka Menengah</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link nav-active @if (\Request::is('officer/agenda')) active @endif" href="{{route('officer.agenda')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-world-2 text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Agenda</span>
        </a>
      </li> --}}
      {{-- <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link nav-active @if (\Request::is('officer/keuangan')) active @endif" href="{{route('officer.keuangan')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-02 text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Keuangan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-active @if (\Request::is('officer/layanan')) active @endif" href="{{route('officer.layanan')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-copy-04 text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Data Layanan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-active @if (\Request::is('officer/peta')) active @endif" href="{{route('officer.peta')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-collection text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Peta Kampung</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link nav-active @if (\Request::is('officer/setting')) active @endif" href="{{route('officer.setting')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="fa fa-cog text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Setting</span>
        </a>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link nav-active" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="fa fa-cog text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Setting</span>
        </a>
        <div class="collapse" id="collapseExample">
          <div class="card card-body collapsed">
            <a href="{{route('officer.dashboard')}}" class="nav-link">Profile</a>
            <a class="nav-link ">Profile</a>
          </div>
        </div>
      </li> --}}
    </ul>
  </div>
  {{-- <div class="sidenav-footer mx-3 ">
    <div class="card card-plain shadow-none" id="sidenavCard">
      <img class="w-50 mx-auto" src="./assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
      <div class="card-body text-center p-3 w-100 pt-0">
        <div class="docs-info">
          <h6 class="mb-0">Need help?</h6>
          <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
        </div>
      </div>
    </div>
    <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
    <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
  </div> --}}
</aside>
