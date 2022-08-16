var wms_layers = [];

var lyr_GoogleEarth_0 = new ol.layer.Tile({
  title: "Google Earth",
  type: "base",
  opacity: 1.0,

  source: new ol.source.XYZ({
    attributions: " ",
    url: "https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}",
  }),
});
var format_BatasKampungBiatanLempake_1 = new ol.format.GeoJSON();
var features_BatasKampungBiatanLempake_1 =
  format_BatasKampungBiatanLempake_1.readFeatures(
    json_BatasKampungBiatanLempake_1,
    { dataProjection: "EPSG:4326", featureProjection: "EPSG:3857" }
  );
var jsonSource_BatasKampungBiatanLempake_1 = new ol.source.Vector({
  attributions: " ",
});
jsonSource_BatasKampungBiatanLempake_1.addFeatures(
  features_BatasKampungBiatanLempake_1
);
var lyr_BatasKampungBiatanLempake_1 = new ol.layer.Vector({
  declutter: true,
  source: jsonSource_BatasKampungBiatanLempake_1,
  style: style_BatasKampungBiatanLempake_1,
  interactive: true,
  title:
    '<img src="/webgis/styles/legend/BatasKampungBiatanLempake_1.png" /> Batas Kampung Biatan Lempake',
});

lyr_GoogleEarth_0.setVisible(true);
lyr_BatasKampungBiatanLempake_1.setVisible(true);
var layersList = [lyr_GoogleEarth_0, lyr_BatasKampungBiatanLempake_1];
lyr_BatasKampungBiatanLempake_1.set("fieldAliases", {
  OBJECTID: "OBJECTID",
  SHAPE_Leng: "SHAPE_Leng",
  SHAPE_Area: "SHAPE_Area",
  KAMPUNG: "KAMPUNG",
  RT: "RT",
  Luas: "Luas",
});
lyr_BatasKampungBiatanLempake_1.set("fieldImages", {
  OBJECTID: "TextEdit",
  SHAPE_Leng: "TextEdit",
  SHAPE_Area: "TextEdit",
  KAMPUNG: "TextEdit",
  RT: "TextEdit",
  Luas: "TextEdit",
});
lyr_BatasKampungBiatanLempake_1.set("fieldLabels", {
  OBJECTID: "no label",
  SHAPE_Leng: "no label",
  SHAPE_Area: "no label",
  KAMPUNG: "header label",
  RT: "inline label",
  Luas: "no label",
});
lyr_BatasKampungBiatanLempake_1.on("precompose", function (evt) {
  evt.context.globalCompositeOperation = "normal";
});
