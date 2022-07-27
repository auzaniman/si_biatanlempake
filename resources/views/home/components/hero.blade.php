<div class="section section-hero section-shaped">
  {{-- <div class="shape shape-style-3 shape-default">
    <span class="span-150"></span>
    <span class="span-50"></span>
    <span class="span-50"></span>
    <span class="span-75"></span>
    <span class="span-100"></span>
    <span class="span-75"></span>
    <span class="span-50"></span>
    <span class="span-100"></span>
    <span class="span-50"></span>
    <span class="span-100"></span>
  </div> --}}
  {{-- Alert --}}
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  @if (session('status'))
  <div class="alert alert-success" role="alert">
      {{ session('status') }}
  </div>
  @endif
  {{-- End Alert --}}

  <div class="page-header">
    <div class="container shape-container d-flex align-items-center py-lg-7 py-4">
      <img src="{{url('frontend/assets/img/3.jpg')}}" class="img-hero" alt="">
      <div class="col px-0">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-12 text-center pt-lg-4 mt-lg-5">
            <h1 class="text-white display-1">Selamat datang di laman Kampung Biatan Lempake.</h1>
            <div class="btn-wrapper mt-4 d-block d-lg-none">
              @guest
              <a href="{{route('login')}}" class="btn btn-warning btn-icon mt-3 mb-sm-0">
                <span class="btn-inner--icon"><i class="fa fa-sign-in" style="font-size: 1rem"></i></span>
                <span class="btn-inner--text font-weight-bold" style="font-size: 1rem">Masuk</span>
              </a>
              @endguest
              @auth
              <a href="{{route('dashboard')}}" class="btn btn-warning btn-icon mt-3 mb-sm-0">
                <span class="btn-inner--icon"><i class="fa fa-sign-in" style="font-size: 1rem"></i></span>
                <span class="btn-inner--text font-weight-bold" style="font-size: 1rem">Dashboard</span>
              </a>
              @endauth

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
