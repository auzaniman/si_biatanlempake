<!DOCTYPE html>
<html lang="en">
<head>
  @include('webgis.components.meta')
  @include('webgis.components.style')
  <title>@yield('title')</title>
</head>
<body class="g-sidenav-show">
  @include('superuser.components.sidebar')
  {{-- <main class="main-content position-relative border-radius-lg "> --}}
    @include('superuser.components.topbar')
    {{-- <div class="container-fluid py-3"> --}}
      @yield('content')
      @include('webgis.components.plugin-member')
    </div>
  </main>
  @include('webgis.components.script')
</body>
</html>
