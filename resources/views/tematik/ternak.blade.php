@extends('layouts.app')

@section('content')
    <div class="services_section layout_padding" style="margin-bottom: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="services_taital">Peta Persebaran Ternak Sapi Provinsi Jabar</h2>
                    <p class="services_text">Berikut peta tematik Persebaran Ternak Sapi di provinsi jawa barat
                    </p>
                </div>
            </div>
            <div class="services_section_2">
                <div class="row">
                    <div class="col-md-12">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([-6.8660396, 106.2854321], 8);

        // Tambahkan tile layer dari OpenStreetMap
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 8,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Konversi data dari Laravel ke format GeoJSON
        const geoJson = {
            type: 'FeatureCollection',
            features: @json($jb3).map(jb1 => ({
                type: 'Feature',
                properties: {
                    name: jb1.name,
                    ternak: jb1.ternak
                },
                geometry: {
                    type: jb1.type_polygon,
                    coordinates: JSON.parse(jb1.polygon)
                }
            }))
        };

        // Fungsi untuk memberikan warna berdasarkan ternak
        function getColor(d) {
            return d > 30000 ? '#090f2a' :
                d > 25000 ? '#202a44' :
                d > 20000 ? '#384560' :
                d > 15000 ? '#52637c' :
                d > 10000 ? '#6e8299' :
                d > 1000 ? '#8ba2b8' :
                d > 500 ? '#aac4d6' :
                '#cbe6f6';
        }

        // Styling layer
        function style(feature) {
            return {
                fillColor: getColor(feature.properties.ternak),
                weight: 2,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7
            };
        }

        // Fungsi interaksi dengan polygon
        function highlightFeature(e) {
            var layer = e.target;
            layer.setStyle({
                weight: 5,
                color: '#FBF5DD',
                dashArray: '',
                fillOpacity: 0.7
            });
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
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });
            layer.bindPopup(`<b>${feature.properties.name}</b><br>Ternak Sapi Potong: ${feature.properties.ternak} Ekor`);
        }

        // Tambahkan layer GeoJSON ke peta
        var geojsonLayer = L.geoJson(geoJson, {
            style: style,
            onEachFeature: onEachFeature
        }).addTo(map);

        // Info kontrol
        var info = L.control();
        info.onAdd = function() {
            this._div = L.DomUtil.create('div', 'info');
            this.update();
            return this._div;
        };
        info.update = function(props) {
            this._div.innerHTML = '<h4>Persebaran Ternak Sapi Potong di Prov. Jawa Barat</h4>' + (props ?
                `<b>${props.name}</b><br>${props.ternak} Ekor` : 'Silakan Pilih Wilayah');
        };
        info.addTo(map);

        // Tambahkan legenda
        var legend = L.control({
            position: 'bottomright'
        });
        legend.onAdd = function() {
            var div = L.DomUtil.create('div', 'info legend'),
                grades = [500, 1000, 10000, 15000, 20000, 25000, 30000];
            grades.forEach((grade, i) => {
                div.innerHTML +=
                    `<i style="background:${getColor(grade)}"></i> ${grade}${grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+'}`;
            });
            return div;
        };
        legend.addTo(map);
    </script>
@endpush
