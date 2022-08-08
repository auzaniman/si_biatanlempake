<!DOCTYPE html>
<html lang="en">
<head>
  @include('webgis.components.meta')
  @include('webgis.components.style')
  <title>@yield('title')</title>
</head>
<body class="g-sidenav-show bg-gray-200">
  @include('superuser.components.sidebar')
  @include('superuser.components.topbar')
  @yield('content')
  {{-- @include('superuser.components.footer') --}}
  @include('webgis.components.plugin-member')
  @include('webgis.components.script')
</body>
</html>
