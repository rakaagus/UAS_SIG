<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #map {
            height: 600px;
        }
        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255,255,255,0.8);
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            border-radius: 5px;
        }
        .info h3 {
            margin: 0 0 5px;
            color: #333;
        }
        .info h4 {
            margin: 0 0 5px;
            color: #777;
        }
        .legend {
            line-height: 18px;
            color: #555;
        }
        .legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
        }
    </style>
</head>

<body>
    <div id="map"></div>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>

    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([-6.8660396, 106.2854321], 8);

        // Tambahkan tile layer dari OpenStreetMap
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Konversi data dari Laravel ke format GeoJSON
        const geoJson = {
            type: 'FeatureCollection',
            features: @json($jb4).map(jb1 => ({
                type: 'Feature',
                properties: { name: jb1.name, miskin: jb1.miskin },
                geometry: { type: jb1.type_polygon, coordinates: JSON.parse(jb1.polygon) }
            }))
        };

        // Fungsi untuk memberikan warna berdasarkan miskin
        function getColor(d) {
            return d > 250 ? '#4d004b' : 
                d > 200 ? '#810f7c' : 
                d > 150 ? '#88419d' :
                d > 100 ? '#8c6bb1' : 
                d > 50 ? '#8c96c6' : 
                d > 10  ? '#9ebcda' :
                d > 5   ? '#bfd3e6' : 
                            '#e0ecf4';
        }

        // Styling layer
        function style(feature) {
            return {
                fillColor: getColor(feature.properties.miskin),
                weight: 2,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7
            };
        }

        // Fungsi interaksi dengan polygon
        function highlightFeature(e) {
            var layer = e.target;
            layer.setStyle({ weight: 5, color: '#FBF5DD', dashArray: '', fillOpacity: 0.7 });
            layer.bringToFront();
            info.update(layer.feature.properties);
        }

        function resetHighlight(e) {
            geojsonLayer.resetStyle(e.target);
            info.update();
        }

        function zoomToFeature(e) {
            map.fitBounds(e.target.getBounds());
        }

        function onEachFeature(feature, layer) {
            layer.on({ mouseover: highlightFeature, mouseout: resetHighlight, click: zoomToFeature });
            layer.bindPopup(`<b>${feature.properties.name}</b><br>Populasi: ${feature.properties.miskin} Jiwa`);
        }

        // Tambahkan layer GeoJSON ke peta
        var geojsonLayer = L.geoJson(geoJson, { style: style, onEachFeature: onEachFeature }).addTo(map);

        // Info kontrol
        var info = L.control();
        info.onAdd = function () {
            this._div = L.DomUtil.create('div', 'info');
            this.update();
            return this._div;
        };
        info.update = function (props) {
            this._div.innerHTML = '<h4>Populasi Penduduk Miskin di Prov. Jawa Barat</h4>' + (props ? `<b>${props.name}</b><br>${props.miskin} Jiwa` : 'Silakan Pilih Wilayah');
        };
        info.addTo(map);

        // Tambahkan legenda
        var legend = L.control({ position: 'bottomright' });
        legend.onAdd = function () {
            var div = L.DomUtil.create('div', 'info legend'), grades = [5, 10, 50, 100, 150, 200, 250];
            grades.forEach((grade, i) => {
                div.innerHTML += `<i style="background:${getColor(grade)}"></i> ${grade}${grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+'}`;
            });
            return div;
        };
        legend.addTo(map);

    </script>

</body>
</html>