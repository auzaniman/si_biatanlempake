<!DOCTYPE html>
<html lang="en">
<head>
  @include('webgis.components.meta')
  @include('webgis.components.style')
  <title>@yield('title')</title>
</head>
<body class="g-sidenav-show bg-gray-200">
  @include('officer.components.sidebar')
  @include('officer.components.topbar')
  @yield('content')
  @include('webgis.components.plugin-officer')
  @include('webgis.components.script')
</body>
</html>
