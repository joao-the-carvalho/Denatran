<x-layout>
    <x-slot:title>
        Mapa
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <div>
                    <p class="center">Mapa da cidade de São Paulo</p>
                    <Br>
                    <link rel="stylesheet"
                    href="https://unpkg.com/leaflet/dist/leaflet.css">

                    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

                    <div id="map" style="height:500px"></div>

                    <script>
                    var map = L.map('map').setView(
                        [-23.55052, -46.633308],
                        11
                    );

                    L.tileLayer(
                    'https://tile.openstreetmap.org/{z}/{x}/{y}.png'
                    ).addTo(map);
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-layout>