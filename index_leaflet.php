<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa de Ubicaciones con Leaflet</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div id="map"></div>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([0, 0], 10); // Inicializar el mapa en coordenadas (0, 0) con zoom 10
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
            maxZoom: 18,
        }).addTo(map);

        // Aquí puedes realizar una solicitud AJAX para obtener las ubicaciones guardadas en la base de datos
        // y luego agregar marcadores al mapa con esas ubicaciones
        // Por ejemplo, puedes utilizar jQuery para la solicitud AJAX

        $.ajax({
            url: 'obtener_ubicaciones.php',
            dataType: 'json',
            success: function(data) {
                data.forEach(function(ubicacion) {
                    L.marker([ubicacion.latitud, ubicacion.longitud]).addTo(map)
                        .bindPopup('Ubicación').openPopup();
                });
            },
            error: function(xhr, status, error) {
                console.log('Error al obtener ubicaciones:', error);
            }
        });
    </script>
</body>
</html>
