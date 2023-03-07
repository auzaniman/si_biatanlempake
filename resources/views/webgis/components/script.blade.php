<!--   Core JS Files   -->
  <script src="{{ url('backend/assets/js/core/popper.min.js')}}"></script>
  <script src="{{ url('backend/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ url('backend/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ url('backend/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{ url('backend/assets/js/plugins/chartjs.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5,npm/fullcalendar@5/locales-all.min.js,npm/fullcalendar@5/locales-all.min.js,npm/fullcalendar@5/main.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{url('backend/assets/js/argon-dashboard.min.js?v=2.0.2')}}"></script>
  <!-- Magnific Popup core JS file -->
  <script src="{{url('backend/plugin/Magnific/dist/magnific-popup/jquery.magnific-popup.js')}}"></script>

  {{-- GIS --}}
  {{--  <script src="{{url('webgis/resources/qgis2web_expressions.js')}}"></script>
  <script src="{{url('webgis/resources/polyfills.js')}}"></script>
  <script src="{{url('webgis/resources/functions.js')}}"></script>
  <script src="{{url('webgis/resources/ol.js')}}"></script>
  <script src="{{url('webgis/resources/ol-layerswitcher.js')}}"></script>
  <script src="{{url('webgis/layers/BatasKampungBiatanLempake_1.js')}}"></script>
  <script src="{{url('webgis/styles/BatasKampungBiatanLempake_1_style.js')}}"></script>
  <script src="{{url('webgis/layers/layers.js')}}" type="text/javascript"></script>
  <script src="{{url('webgis/resources/Autolinker.min.js')}}"></script>
  <script src="{{url('webgis/resources/qgis2web.js')}}"></script>  --}}

  <script src="{{ url('webgis/js/qgis2web_expressions.js') }}"></script>
  <script src="{{ url('webgis/js/leaflet.js') }}"></script>
  <script src="{{ url('webgis/js/leaflet.rotatedMarker.js') }}"></script>
  <script src="{{ url('webgis/js/leaflet.pattern.js') }}"></script>
  <script src="{{ url('webgis/js/leaflet-hash.js') }}"></script>
  <script src="{{ url('webgis/js/Autolinker.min.js') }}"></script>
  <script src="{{ url('webgis/js/rbush.min.js') }}"></script>
  <script src="{{ url('webgis/js/labelgun.min.js') }}"></script>
  <script src="{{ url('webgis/js/labels.js') }}"></script>
  <script src="{{ url('webgis/js/leaflet-control-geocoder.Geocoder.js') }}"></script>
  <script src="{{ url('webgis/data/RencanaTataGunaLahan_1.js') }}"></script>
  <script src="{{ url('webgis/data/BatasAdministrasiRT_2.js') }}"></script>
  <script src="{{ url('webgis/data/BatasAdministrasiKampung_3.js') }}"></script>
  <script src="{{ url('webgis/data/Sungai_4.js') }}"></script>
  <script src="{{ url('webgis/data/Jalan_5.js') }}"></script>
  <script src="{{ url('webgis/data/PersilBidang_6.js') }}"></script>
  <script src="{{ url('webgis/data/AsetKampung_7.js') }}"></script>

  {{--  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <script>
    let navActive = document.querySelectorAll('.nav-active')

    navActive.forEach((a) => {
      a.addEventListener("click", (e) => {
          navActive.forEach((el) => el.classList.remove("active"));
          a.classList.add("active");
      });
    });
  </script>  --}}

  <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        })
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
            if (bounds_group.getLayers().length) {
                map.fitBounds(bounds_group.getBounds());
            }
        }
        map.createPane('pane_GoogleEarth_0');
        map.getPane('pane_GoogleEarth_0').style.zIndex = 400;
        var layer_GoogleEarth_0 = L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            pane: 'pane_GoogleEarth_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 40
        });
        layer_GoogleEarth_0;
        map.addLayer(layer_GoogleEarth_0);
        function pop_RencanaTataGunaLahan_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KAMPUNG'] !== null ? autolinker.link(feature.properties['KAMPUNG'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">NEW_RTGL</th>\
                        <td>' + (feature.properties['NEW_RTGL'] !== null ? autolinker.link(feature.properties['NEW_RTGL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">LUAS_Ha</th>\
                        <td>' + (feature.properties['LUAS_Ha'] !== null ? autolinker.link(feature.properties['LUAS_Ha'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">KETERANGAN</th>\
                        <td>' + (feature.properties['KETERANGAN'] !== null ? autolinker.link(feature.properties['KETERANGAN'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_RencanaTataGunaLahan_1_0() {
            return {
                pane: 'pane_RencanaTataGunaLahan_1',
                opacity: 1,
                color: 'rgba(51,160,44,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(191,255,153,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_RencanaTataGunaLahan_1');
        map.getPane('pane_RencanaTataGunaLahan_1').style.zIndex = 401;
        map.getPane('pane_RencanaTataGunaLahan_1').style['mix-blend-mode'] = 'normal';
        var layer_RencanaTataGunaLahan_1 = new L.geoJson(json_RencanaTataGunaLahan_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_RencanaTataGunaLahan_1',
            layerName: 'layer_RencanaTataGunaLahan_1',
            pane: 'pane_RencanaTataGunaLahan_1',
            onEachFeature: pop_RencanaTataGunaLahan_1,
            style: style_RencanaTataGunaLahan_1_0,
        });
        bounds_group.addLayer(layer_RencanaTataGunaLahan_1);
        map.addLayer(layer_RencanaTataGunaLahan_1);
        function pop_BatasAdministrasiRT_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">RT</th>\
                        <td>' + (feature.properties['RT'] !== null ? autolinker.link(feature.properties['RT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Leng'] !== null ? autolinker.link(feature.properties['Shape_Leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Area'] !== null ? autolinker.link(feature.properties['Shape_Area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_BatasAdministrasiRT_2_0() {
            return {
                pane: 'pane_BatasAdministrasiRT_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '10,5,1,5,1,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_BatasAdministrasiRT_2');
        map.getPane('pane_BatasAdministrasiRT_2').style.zIndex = 402;
        map.getPane('pane_BatasAdministrasiRT_2').style['mix-blend-mode'] = 'normal';
        var layer_BatasAdministrasiRT_2 = new L.geoJson(json_BatasAdministrasiRT_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_BatasAdministrasiRT_2',
            layerName: 'layer_BatasAdministrasiRT_2',
            pane: 'pane_BatasAdministrasiRT_2',
            onEachFeature: pop_BatasAdministrasiRT_2,
            style: style_BatasAdministrasiRT_2_0,
        });
        bounds_group.addLayer(layer_BatasAdministrasiRT_2);
        map.addLayer(layer_BatasAdministrasiRT_2);
        function pop_BatasAdministrasiKampung_3(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Id</th>\
                        <td>' + (feature.properties['Id'] !== null ? autolinker.link(feature.properties['Id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_BatasAdministrasiKampung_3_0() {
            return {
                pane: 'pane_BatasAdministrasiKampung_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '10,5,1,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_BatasAdministrasiKampung_3');
        map.getPane('pane_BatasAdministrasiKampung_3').style.zIndex = 403;
        map.getPane('pane_BatasAdministrasiKampung_3').style['mix-blend-mode'] = 'normal';
        var layer_BatasAdministrasiKampung_3 = new L.geoJson(json_BatasAdministrasiKampung_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_BatasAdministrasiKampung_3',
            layerName: 'layer_BatasAdministrasiKampung_3',
            pane: 'pane_BatasAdministrasiKampung_3',
            onEachFeature: pop_BatasAdministrasiKampung_3,
            style: style_BatasAdministrasiKampung_3_0,
        });
        bounds_group.addLayer(layer_BatasAdministrasiKampung_3);
        map.addLayer(layer_BatasAdministrasiKampung_3);
        function pop_Sungai_4(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SHAPE_Leng'] !== null ? autolinker.link(feature.properties['SHAPE_Leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SHAPE_Area'] !== null ? autolinker.link(feature.properties['SHAPE_Area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RT'] !== null ? autolinker.link(feature.properties['RT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['PL_CITRA'] !== null ? autolinker.link(feature.properties['PL_CITRA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Sungai_4_0() {
            return {
                pane: 'pane_Sungai_4',
                opacity: 1,
                color: 'rgba(166,206,227,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(0,255,255,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_Sungai_4');
        map.getPane('pane_Sungai_4').style.zIndex = 404;
        map.getPane('pane_Sungai_4').style['mix-blend-mode'] = 'normal';
        var layer_Sungai_4 = new L.geoJson(json_Sungai_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Sungai_4',
            layerName: 'layer_Sungai_4',
            pane: 'pane_Sungai_4',
            onEachFeature: pop_Sungai_4,
            style: style_Sungai_4_0,
        });
        bounds_group.addLayer(layer_Sungai_4);
        map.addLayer(layer_Sungai_4);
        function pop_Jalan_5(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SHAPE_Leng'] !== null ? autolinker.link(feature.properties['SHAPE_Leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SHAPE_Area'] !== null ? autolinker.link(feature.properties['SHAPE_Area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RT'] !== null ? autolinker.link(feature.properties['RT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['PL_CITRA'] !== null ? autolinker.link(feature.properties['PL_CITRA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Jalan_5_0() {
            return {
                pane: 'pane_Jalan_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(0,0,0,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_Jalan_5');
        map.getPane('pane_Jalan_5').style.zIndex = 405;
        map.getPane('pane_Jalan_5').style['mix-blend-mode'] = 'normal';
        var layer_Jalan_5 = new L.geoJson(json_Jalan_5, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Jalan_5',
            layerName: 'layer_Jalan_5',
            pane: 'pane_Jalan_5',
            onEachFeature: pop_Jalan_5,
            style: style_Jalan_5_0,
        });
        bounds_group.addLayer(layer_Jalan_5);
        map.addLayer(layer_Jalan_5);
        function pop_PersilBidang_6(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2"><strong>OBJECTID</strong><br />' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SHAPE_Leng'] !== null ? autolinker.link(feature.properties['SHAPE_Leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SHAPE_Area</th>\
                        <td>' + (feature.properties['SHAPE_Area'] !== null ? autolinker.link(feature.properties['SHAPE_Area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">RT</th>\
                        <td>' + (feature.properties['RT'] !== null ? autolinker.link(feature.properties['RT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['PL_CITRA'] !== null ? autolinker.link(feature.properties['PL_CITRA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">PENGGUNAAN</th>\
                        <td>' + (feature.properties['PENGGUNAAN'] !== null ? autolinker.link(feature.properties['PENGGUNAAN'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">TIPEHAK</th>\
                        <td>' + (feature.properties['TIPEHAK'] !== null ? autolinker.link(feature.properties['TIPEHAK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">LUAS</th>\
                        <td>' + (feature.properties['LUAS'] !== null ? autolinker.link(feature.properties['LUAS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">NIB</th>\
                        <td>' + (feature.properties['NIB'] !== null ? autolinker.link(feature.properties['NIB'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">KETERANGAN</th>\
                        <td>' + (feature.properties['KETERANGAN'] !== null ? autolinker.link(feature.properties['KETERANGAN'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NOMOR'] !== null ? autolinker.link(feature.properties['NOMOR'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_PersilBidang_6_0() {
            return {
                pane: 'pane_PersilBidang_6',
                opacity: 1,
                color: 'rgba(227,26,28,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_PersilBidang_6');
        map.getPane('pane_PersilBidang_6').style.zIndex = 406;
        map.getPane('pane_PersilBidang_6').style['mix-blend-mode'] = 'normal';
        var layer_PersilBidang_6 = new L.geoJson(json_PersilBidang_6, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PersilBidang_6',
            layerName: 'layer_PersilBidang_6',
            pane: 'pane_PersilBidang_6',
            onEachFeature: pop_PersilBidang_6,
            style: style_PersilBidang_6_0,
        });
        bounds_group.addLayer(layer_PersilBidang_6);
        map.addLayer(layer_PersilBidang_6);
        function pop_AsetKampung_7(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Aset_Kampu</th>\
                        <td>' + (feature.properties['Aset_Kampu'] !== null ? autolinker.link(feature.properties['Aset_Kampu'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['X'] !== null ? autolinker.link(feature.properties['X'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Y'] !== null ? autolinker.link(feature.properties['Y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Elevasi'] !== null ? autolinker.link(feature.properties['Elevasi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SARPRAS'] !== null ? autolinker.link(feature.properties['SARPRAS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Bayangan_S'] !== null ? autolinker.link(feature.properties['Bayangan_S'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_AsetKampung_7_0() {
            return {
                pane: 'pane_AsetKampung_7',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,127,0,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_AsetKampung_7');
        map.getPane('pane_AsetKampung_7').style.zIndex = 407;
        map.getPane('pane_AsetKampung_7').style['mix-blend-mode'] = 'normal';
        var layer_AsetKampung_7 = new L.geoJson(json_AsetKampung_7, {
            attribution: '',
            interactive: true,
            dataVar: 'json_AsetKampung_7',
            layerName: 'layer_AsetKampung_7',
            pane: 'pane_AsetKampung_7',
            onEachFeature: pop_AsetKampung_7,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_AsetKampung_7_0(feature));
            },
        });
        bounds_group.addLayer(layer_AsetKampung_7);
        map.addLayer(layer_AsetKampung_7);
        var osmGeocoder = new L.Control.Geocoder({
            collapsed: true,
            position: 'topleft',
            text: 'Search',
            title: 'Testing'
        }).addTo(map);
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .className += ' fa fa-search';
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .title += 'Search for a place';
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="/webgis/legend/AsetKampung_7.png" /> Aset Kampung': layer_AsetKampung_7,'<img src="/webgis/legend/PersilBidang_6.png" /> Persil Bidang': layer_PersilBidang_6,'<img src="/webgis/legend/Jalan_5.png" /> Jalan': layer_Jalan_5,'<img src="/webgis/legend/Sungai_4.png" /> Sungai': layer_Sungai_4,'<img src="/webgis/legend/BatasAdministrasiKampung_3.png" /> Batas Administrasi Kampung': layer_BatasAdministrasiKampung_3,'<img src="/webgis/legend/BatasAdministrasiRT_2.png" /> Batas Administrasi RT': layer_BatasAdministrasiRT_2,'<img src="/webgis/legend/RencanaTataGunaLahan_1.png" /> Rencana Tata Guna Lahan': layer_RencanaTataGunaLahan_1,"Google Earth": layer_GoogleEarth_0,}).addTo(map);
        setBounds();
        </script>
