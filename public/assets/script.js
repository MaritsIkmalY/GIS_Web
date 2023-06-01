var map = L.map("map").setView([ -7.250445, 112.768845], 8);
L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);


// function onMapClick(e) {
//     alert("You clicked the map at " + e.latlng);
// }

// map.on('click', onMapClick);
// var popup = L.popup();

// function onMapClick(e) {
//     popup
//         .setLatLng(e.latlng)
//         .setContent("You clicked the map at " + e.latlng.toString())
//         .openOn(map);
// }

// map.on('click', onMapClick);

var legend = L.control({
    position: 'topright'
});

legend.onAdd = function(map) {
    var div = L.DomUtil.get('legend');
    div.innerHTML = '<h4>Indeks Kemiskinan</h4>' +
        '<div><span class="circle" style="background-color: red;"></span> >200 </div>' +
        '<div><span class="circle" style="background-color: orange;"></span> >150 </div>' +
        '<div><span class="circle" style="background-color: yellow;"></span> >100 </div>' +
        '<div><span class="circle" style="background-color: green;"></span> <100</div>';
    return div;
};

legend.addTo(map);

var legend = L.control({
    position: 'bottomright'
});

legend.onAdd = function(map) {
    var div = L.DomUtil.get('legend2');
    div.innerHTML = '<h4>Indeks Pendidikan</h4>' +
        '<div><span class="circle" style="background-color: red;"></span> > 0.79 (sangat bagus) </div>' +
        '<div><span class="circle" style="background-color: orange;"></span> > 0.70 - 0.79 (tinggi) </div>' +
        '<div><span class="circle" style="background-color: yellow;"></span> > 0.60 - 0.69 (sedang) </div>' +
        '<div><span class="circle" style="background-color: green;"></span> < 60 (rendah)</div>';
    return div;
};

legend.addTo(map);
