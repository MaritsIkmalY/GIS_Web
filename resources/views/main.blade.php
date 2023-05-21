<x-main-layout>
    <div id="beranda">Haloo</div>
    <div>ini map</div>
    <div id="map"></div>
    <div id="contact">Ini Kontak</div>
    <script>
        function getColor(mark){
            return mark > 10 ? 'red' :
            mark > 8 ? 'yellow' :
            mark > 6 ? 'green' :
            mark > 4 ? 'blue' :
            mark > 2 ? 'magenta' :
            'purple';
        }

        function style(feature){
            return {
                fillColor : getColor(feature.properties.remark),
                weight : 1,
            };
        }

        $.getJSON('geojson/penduduk_miskin_jatim.geojson', function(json) {
            geoLayer = L.geoJson(json, {
                onEachFeature: function(feature, layer) {
                    var properties = feature.properties;

                    // Mendapatkan informasi yang diinginkan dari properti
                    var nama = properties.wadmkk;

                    // Mendapatkan koordinat
                    var coordinates = feature.geometry.coordinates;

                    // Membuat popup dengan informasi titik
                    var popupContent = "<strong>Kota : </strong> " + nama
                    layer.bindPopup(popupContent);
                },
                style : style
            }).addTo(map);
        });


    </script>
</x-main-layout>
