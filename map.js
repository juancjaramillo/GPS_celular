// Inicializar mapa
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 0, lng: 0}, // Centro inicial
        zoom: 15 // Zoom inicial
    });

    // Obtener la ubicación del usuario
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            // Colocar un marcador en la ubicación actual
            var marker = new google.maps.Marker({
                position: pos,
                map: map,
                title: 'Ubicación actual'
            });

            map.setCenter(pos); // Centrar el mapa en la ubicación actual
        }, function() {
            handleLocationError(true, map.getCenter());
        });
    } else {
        handleLocationError(false, map.getCenter());
    }
}

// Manejar errores de geolocalización
function handleLocationError(browserHasGeolocation, pos) {
    var infoWindow = new google.maps.InfoWindow;
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: No se pudo obtener la ubicación' :
        'Error: Tu navegador no admite la geolocalización');
    infoWindow.open(map);
}

// Inicializar el mapa cuando se cargue la página
google.maps.event.addDomListener(window, 'load', initMap);
