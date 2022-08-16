<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<!-- Nucleo Icons -->
<link href="{{url('backend/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
<link href="{{url('backend/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="{{url('backend/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
{{-- Full Calender --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5/main.min.css,npm/fullcalendar@5/main.min.css">
{{-- Animate CSS --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="{{url('backend/plugin/Magnific/dist/magnific-popup/magnific-popup.css')}}">
<!-- CSS Files -->
<link id="pagestyle" href="{{url('backend/assets/css/argon-dashboard.css?v=2.0.2')}}" rel="stylesheet" />

{{-- GIS --}}
<link rel="stylesheet" href="{{url('webgis/resources/ol.css')}}">
<link rel="stylesheet" href="{{url('webgis/resources/fontawesome-all.min.css')}}">
<link rel="stylesheet" href="{{url('webgis/resources/ol-layerswitcher.css')}}">
<link rel="stylesheet" href="{{url('webgis/resources/qgis2web.css')}}">
<style>
  .search-layer {
    top: 100px;
    left: .5em;
  }
  .ol-touch .search-layer {
    top: 130px;
  }
</style>
<style>
  .search-layer {
    top: 135px;
    left: .5em;
  }
  .ol-touch .search-layer {
    top: 180px;
  }
</style>
<style>
  /* html, body {
    background-color: #ffffff;
  } */
  .ol-control button {
    background-color: #f8f8f8 !important;
    color: #000000 !important;
    border-radius: 0px !important;
  }
  .ol-zoom, .geolocate, .gcd-gl-control .ol-control {
    background-color: rgba(255,255,255,.4) !important;
    padding: 3px !important;
  }
  .ol-scale-line {
    background: none !important;
  }
  .ol-scale-line-inner {
    border: 2px solid #f8f8f8 !important;
    border-top: none !important;
    background: rgba(255, 255, 255, 0.5) !important;
    color: black !important;
  }
</style>
<style>
  .tooltip {
    position: relative;
    background: rgba(0, 0, 0, 0.5);
    border-radius: 4px;
    color: white;
    padding: 4px 8px;
    opacity: 0.7;
    white-space: nowrap;
  }
  .tooltip-measure {
    opacity: 1;
    font-weight: bold;
  }
  .tooltip-static {
    background-color: #ffcc33;
    color: black;
    border: 1px solid white;
  }
  .tooltip-measure:before,
  .tooltip-static:before {
    border-top: 6px solid rgba(0, 0, 0, 0.5);
    border-right: 6px solid transparent;
    border-left: 6px solid transparent;
    content: "";
    position: absolute;
    bottom: -6px;
    margin-left: -7px;
    left: 50%;
  }
  .tooltip-static:before {
    border-top-color: #ffcc33;
  }
  .measure-control {
    top: 65px;
    left: .5em;
  }
  .ol-touch .measure-control {
    top: 80px;
  }
</style>
<style>
  html, body, #map {
    /* width: 100%;
    height: 100%; */
    padding: 0;
    margin: 0;
  }
</style>

<style>
  @media (min-width: 992px) {

    nav[aria-label="breadcrumb"] {
      margin-left: 17rem;
    }

    div .ol-viewport {
      left: 19.5rem;
      width: 73% !important;
      height: 85vh !important;
    }
   }
</style>

<style>
  a span {
    color: #5a5a5a;
  }

  p {
    color: #5a5a5a;
  }
</style>
