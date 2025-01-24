@extends('layouts.app')

@section('content')
    <div class="services_section layout_padding" style="margin-bottom: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="services_taital">Peta Kabkota Indonesia</h1>
                    <p class="services_text">Berikut Titik peta kabupaten dan kota indonesia</p>
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
        var map = L.map('map').setView([-0.3155398750904368, 117.1371634207888], 5);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var provinces = @json($kabkota);
        console.log(provinces);
        provinces.forEach(function(provinces) {
            var marker = L.marker([provinces.latitude, provinces.longitude]).addTo(map).bindPopup(provinces.name);
        });
    </script>
@endpush
