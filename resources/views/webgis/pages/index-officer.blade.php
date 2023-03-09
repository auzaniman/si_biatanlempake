@extends('webgis.layouts.app-officer')

@section('title')
Peta Desa
@endsection

@section('content')
<div id="map" class="z-index-0">
  <div id="popup" class="ol-popup">
    <a href="#" id="popup-closer" class="ol-popup-closer"></a>
    <div id="popup-content"></div>
  </div>
</div>
@endsection
