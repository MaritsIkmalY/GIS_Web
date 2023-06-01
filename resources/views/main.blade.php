<x-main-layout>
    <x-hero/>
    <x-about/>
    <x-map/>
    <div id="legend" class="leaflet-control"></div>
    <div id="legend2" class="leaflet-control"></div>
    <x-our-team/>
    <x-contact/>
    <script>


        function getColor(zone) {
            return zone > 200 ? 'red' :
                zone > 150 ? 'orange' :
                zone > 100 ? 'yellow' :
                'green';
        }

        function style(feature) {
            return {
                fillColor: getColor(feature.properties.miskin),
                weight: 2,
            };
        }

        $.getJSON('geojson/penduduk_miskin_jatim.geojson', function(json) {
            geoLayer = L.geoJson(json, {
                onEachFeature: function(feature, layer) {
                    var properties = feature.properties;
                    var popupContent = '<div>';
                    popupContent += '<h3 style="text-align: center;">' + properties.name + '</h3>';
                    popupContent += '<br><strong>Jumlah Penduduk :</strong><br>' + properties.penduduk;
                    popupContent += '<br><strong>Penduduk Miskin :</strong><br>' + properties.miskin *
                        1000;
                    popupContent += '<br><strong>UMR : </strong><br>' + "Rp. " + properties.umr;
                    popupContent += '<br><strong>Pendidikan :</strong><br>' + properties.pendidikan;
                    popupContent += '</div>';
                    layer.bindPopup(popupContent);
                },
                style: style
            }).addTo(map);
        });

        // $.getJSON('geojson/data.geojson', function(data) {
        //     L.geoJSON(data, {
        //         pointToLayer: function(feature, latlng) {
        //             return L.marker(latlng, {
        //                 // icon: officeIcon
        //             });
        //         },

        //         onEachFeature: function(feature, layer) {
        //             var properties = feature.properties;

        //             var popupContent = '<div>';
        //             popupContent += '<h3 style="text-align: center;">' + properties.name + '</h3>';
        //             popupContent += '<br><strong>Jumlah Penduduk :</strong><br>' + properties.penduduk;
        //             popupContent += '<br><strong>Penduduk Miskin :</strong><br>' + properties.miskin;
        //             popupContent += '<br><strong>UMR : RP.</strong><br>' + properties.umr;
        //             popupContent += '<br><strong>Pendidikan :</strong><br>' + properties.pendidikan;
        //             popupContent += '</div>';
        //             layer.bindPopup(popupContent);
        //         }
        //     }).addTo(map);
        // });

        feather.replace()
    </script>
</x-main-layout>
