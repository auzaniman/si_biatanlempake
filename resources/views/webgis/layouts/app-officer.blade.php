<!DOCTYPE html>
<html lang="en">
<head>
  @include('webgis.components.meta')
  @include('webgis.components.style')
  <title>@yield('title')</title>
</head>
<body>
  @yield('content')
  @include('webgis.components.plugin-officer')
  @include('webgis.components.script')
</body>
</html>
