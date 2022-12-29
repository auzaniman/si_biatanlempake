<!DOCTYPE html>
<html lang="en">
<head>
  @include('superuser.components.meta')
  @stack('meta_gis')
  @include('superuser.components.style')
  @stack('style_gis')
  @stack('style_ol')
  <title>
  @yield('title')
  </title>
</head>
<body class="g-sidenav-show bg-gray-200">
  @include('superuser.components.sidebar')

  <main class="main-content position-relative border-radius-lg ">
    @include('superuser.components.topbar')
    <div class="container-fluid py-3">
      {{-- Alert --}}
      @if ($errors->any())
      <div class="alert alert-danger text-white z-index-0">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
          <li><strong>{{ $error }}</strong></li>
          @endforeach
        </ul>
      </div>
      @endif

      @if (session('status'))
      <div class="alert text-white alert-success alert-dismissible fade show z-index-0" role="alert">
        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-text"><strong>{{ session('status') }}</strong></span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      {{-- End Alert --}}

      {{-- Main Content --}}
      @yield('content')
      {{-- End Main Content --}}

      @include('superuser.components.footer')
    </div>
  </main>

  {{-- @include('superuser.components.plugin') --}}
  @include('superuser.components.script')
  @stack('script_gis')
  @stack('search')
  @stack('chart')
  @stack('chart_keuangan')
  @stack('calendar')
</body>
</html>
