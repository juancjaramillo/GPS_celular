<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa de Ubicaciones</title>
    <style>
        #map {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY"></script>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 0, lng: 0 }, // Centrar el mapa en coordenadas iniciales (0, 0)
                zoom: 10 // Zoom inicial del mapa
            });

            // Aquí puedes realizar una solicitud AJAX para obtener las ubicaciones guardadas en la base de datos
            // y luego agregar marcadores al mapa con esas ubicaciones
            // Por ejemplo, puedes utilizar jQuery para la solicitud AJAX

            $.ajax({
                url: 'obtener_ubicaciones.php',
                dataType: 'json',
                success: function(data) {
                    data.forEach(function(ubicacion) {
                        var marker = new google.maps.Marker({
                            position: { lat: parseFloat(ubicacion.latitud), lng: parseFloat(ubicacion.longitud) },
                            map: map,
                            title: 'Ubicación'
                        });
                    });
                },
                error: function(xhr, status, error) {
                    console.log('Error al obtener ubicaciones:', error);
                }
            });
        }
        // Llama a la función initMap al cargar la página
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
</body>
</html>
