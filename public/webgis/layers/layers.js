var wms_layers = [];

var lyr_GoogleMaps_0 = new ol.layer.Tile({
  title: "Google Maps",
  type: "base",
  opacity: 1.0,

  source: new ol.source.XYZ({
    attributions: " ",
    url: "https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}",
  }),
});
var format_BatasDesaKemawi_1 = new ol.format.GeoJSON();
var features_BatasDesaKemawi_1 = format_BatasDesaKemawi_1.readFeatures(
  json_BatasDesaKemawi_1,
  { dataProjection: "EPSG:4326", featureProjection: "EPSG:3857" }
);
var jsonSource_BatasDesaKemawi_1 = new ol.source.Vector({
  attributions: " ",
});
jsonSource_BatasDesaKemawi_1.addFeatures(features_BatasDesaKemawi_1);
var lyr_BatasDesaKemawi_1 = new ol.layer.Vector({
  declutter: true,
  source: jsonSource_BatasDesaKemawi_1,
  style: style_BatasDesaKemawi_1,
  interactive: true,
  title:
    '<img src="/webgis/styles/legend/BatasDesaKemawi_1.png" /> Batas Desa Kemawi',
});
var format_BatasDesa_2 = new ol.format.GeoJSON();
var features_BatasDesa_2 = format_BatasDesa_2.readFeatures(json_BatasDesa_2, {
  dataProjection: "EPSG:4326",
  featureProjection: "EPSG:3857",
});
var jsonSource_BatasDesa_2 = new ol.source.Vector({
  attributions: " ",
});
jsonSource_BatasDesa_2.addFeatures(features_BatasDesa_2);
var lyr_BatasDesa_2 = new ol.layer.Vector({
  declutter: true,
  source: jsonSource_BatasDesa_2,
  style: style_BatasDesa_2,
  interactive: true,
  title: '<img src="/webgis/styles/legend/BatasDesa_2.png" /> Batas Desa',
});
var format_KoordinatPetaniBinaan_3 = new ol.format.GeoJSON();
var features_KoordinatPetaniBinaan_3 =
  format_KoordinatPetaniBinaan_3.readFeatures(json_KoordinatPetaniBinaan_3, {
    dataProjection: "EPSG:4326",
    featureProjection: "EPSG:3857",
  });
var jsonSource_KoordinatPetaniBinaan_3 = new ol.source.Vector({
  attributions: " ",
});
jsonSource_KoordinatPetaniBinaan_3.addFeatures(
  features_KoordinatPetaniBinaan_3
);
var lyr_KoordinatPetaniBinaan_3 = new ol.layer.Vector({
  declutter: true,
  source: jsonSource_KoordinatPetaniBinaan_3,
  style: style_KoordinatPetaniBinaan_3,
  interactive: true,
  title:
    '<img src="/webgis/styles/legend/KoordinatPetaniBinaan_3.png" /> Koordinat Petani Binaan',
});

lyr_GoogleMaps_0.setVisible(true);
lyr_BatasDesaKemawi_1.setVisible(true);
lyr_BatasDesa_2.setVisible(true);
lyr_KoordinatPetaniBinaan_3.setVisible(true);
var layersList = [
  lyr_GoogleMaps_0,
  lyr_BatasDesaKemawi_1,
  lyr_BatasDesa_2,
  lyr_KoordinatPetaniBinaan_3,
];
lyr_BatasDesaKemawi_1.set("fieldAliases", {
  KDPPUM: "KDPPUM",
  NAMOBJ: "NAMOBJ",
  REMARK: "REMARK",
  KDPBPS: "KDPBPS",
  FCODE: "FCODE",
  LUASWH: "LUASWH",
  UUPP: "UUPP",
  SRS_ID: "SRS_ID",
  LCODE: "LCODE",
  METADATA: "METADATA",
  KDEBPS: "KDEBPS",
  KDEPUM: "KDEPUM",
  KDCBPS: "KDCBPS",
  KDCPUM: "KDCPUM",
  KDBBPS: "KDBBPS",
  KDBPUM: "KDBPUM",
  WADMKD: "WADMKD",
  WIADKD: "WIADKD",
  WADMKC: "WADMKC",
  WIADKC: "WIADKC",
  WADMKK: "WADMKK",
  WIADKK: "WIADKK",
  WADMPR: "WADMPR",
  WIADPR: "WIADPR",
  TIPADM: "TIPADM",
  SHAPE_Leng: "SHAPE_Leng",
  SHAPE_Area: "SHAPE_Area",
});
lyr_BatasDesa_2.set("fieldAliases", {
  KDPPUM: "KDPPUM",
  NAMOBJ: "NAMOBJ",
  REMARK: "REMARK",
  KDPBPS: "KDPBPS",
  FCODE: "FCODE",
  LUASWH: "LUASWH",
  UUPP: "UUPP",
  SRS_ID: "SRS_ID",
  LCODE: "LCODE",
  METADATA: "METADATA",
  KDEBPS: "KDEBPS",
  KDEPUM: "KDEPUM",
  KDCBPS: "KDCBPS",
  KDCPUM: "KDCPUM",
  KDBBPS: "KDBBPS",
  KDBPUM: "KDBPUM",
  WADMKD: "WADMKD",
  WIADKD: "WIADKD",
  WADMKC: "WADMKC",
  WIADKC: "WIADKC",
  WADMKK: "WADMKK",
  WIADKK: "WIADKK",
  WADMPR: "WADMPR",
  WIADPR: "WIADPR",
  TIPADM: "TIPADM",
  SHAPE_Leng: "SHAPE_Leng",
  SHAPE_Area: "SHAPE_Area",
});
lyr_KoordinatPetaniBinaan_3.set("fieldAliases", {
  id: "id",
  kode: "kode",
  y: "y",
  x: "x",
});
lyr_BatasDesaKemawi_1.set("fieldImages", {
  KDPPUM: "TextEdit",
  NAMOBJ: "TextEdit",
  REMARK: "TextEdit",
  KDPBPS: "TextEdit",
  FCODE: "TextEdit",
  LUASWH: "TextEdit",
  UUPP: "TextEdit",
  SRS_ID: "TextEdit",
  LCODE: "TextEdit",
  METADATA: "TextEdit",
  KDEBPS: "TextEdit",
  KDEPUM: "TextEdit",
  KDCBPS: "TextEdit",
  KDCPUM: "TextEdit",
  KDBBPS: "TextEdit",
  KDBPUM: "TextEdit",
  WADMKD: "TextEdit",
  WIADKD: "TextEdit",
  WADMKC: "TextEdit",
  WIADKC: "TextEdit",
  WADMKK: "TextEdit",
  WIADKK: "TextEdit",
  WADMPR: "TextEdit",
  WIADPR: "TextEdit",
  TIPADM: "TextEdit",
  SHAPE_Leng: "TextEdit",
  SHAPE_Area: "TextEdit",
});
lyr_BatasDesa_2.set("fieldImages", {
  KDPPUM: "TextEdit",
  NAMOBJ: "TextEdit",
  REMARK: "TextEdit",
  KDPBPS: "TextEdit",
  FCODE: "TextEdit",
  LUASWH: "TextEdit",
  UUPP: "TextEdit",
  SRS_ID: "TextEdit",
  LCODE: "TextEdit",
  METADATA: "TextEdit",
  KDEBPS: "TextEdit",
  KDEPUM: "TextEdit",
  KDCBPS: "TextEdit",
  KDCPUM: "TextEdit",
  KDBBPS: "TextEdit",
  KDBPUM: "TextEdit",
  WADMKD: "TextEdit",
  WIADKD: "TextEdit",
  WADMKC: "TextEdit",
  WIADKC: "TextEdit",
  WADMKK: "TextEdit",
  WIADKK: "TextEdit",
  WADMPR: "TextEdit",
  WIADPR: "TextEdit",
  TIPADM: "TextEdit",
  SHAPE_Leng: "TextEdit",
  SHAPE_Area: "TextEdit",
});
lyr_KoordinatPetaniBinaan_3.set("fieldImages", {
  id: "TextEdit",
  kode: "TextEdit",
  y: "TextEdit",
  x: "TextEdit",
});
lyr_BatasDesaKemawi_1.set("fieldLabels", {
  KDPPUM: "no label",
  NAMOBJ: "inline label",
  REMARK: "no label",
  KDPBPS: "no label",
  FCODE: "no label",
  LUASWH: "no label",
  UUPP: "no label",
  SRS_ID: "no label",
  LCODE: "no label",
  METADATA: "no label",
  KDEBPS: "no label",
  KDEPUM: "no label",
  KDCBPS: "no label",
  KDCPUM: "no label",
  KDBBPS: "no label",
  KDBPUM: "no label",
  WADMKD: "no label",
  WIADKD: "no label",
  WADMKC: "no label",
  WIADKC: "inline label",
  WADMKK: "no label",
  WIADKK: "no label",
  WADMPR: "no label",
  WIADPR: "no label",
  TIPADM: "no label",
  SHAPE_Leng: "no label",
  SHAPE_Area: "no label",
});
lyr_BatasDesa_2.set("fieldLabels", {
  KDPPUM: "no label",
  NAMOBJ: "no label",
  REMARK: "no label",
  KDPBPS: "no label",
  FCODE: "no label",
  LUASWH: "no label",
  UUPP: "no label",
  SRS_ID: "no label",
  LCODE: "no label",
  METADATA: "no label",
  KDEBPS: "no label",
  KDEPUM: "no label",
  KDCBPS: "no label",
  KDCPUM: "no label",
  KDBBPS: "no label",
  KDBPUM: "no label",
  WADMKD: "no label",
  WIADKD: "no label",
  WADMKC: "no label",
  WIADKC: "no label",
  WADMKK: "no label",
  WIADKK: "no label",
  WADMPR: "no label",
  WIADPR: "no label",
  TIPADM: "no label",
  SHAPE_Leng: "no label",
  SHAPE_Area: "no label",
});
lyr_KoordinatPetaniBinaan_3.set("fieldLabels", {
  id: "no label",
  kode: "no label",
  y: "no label",
  x: "no label",
});
lyr_KoordinatPetaniBinaan_3.on("precompose", function (evt) {
  evt.context.globalCompositeOperation = "normal";
});
