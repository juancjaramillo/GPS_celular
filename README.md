# Obtener GPS desde celular y mostrarlo en mapa

Este proyecto es básico y muestra la ubicación actual del usuario en el mapa. Puedes extenderlo para guardar los datos GPS en una base de datos, mostrar rutas, o agregar más funcionalidades según tus necesidades.

Este código crea una página que utiliza Leaflet y otra página que usa Google maps, para mostrar un mapa y agregar marcadores de ubicaciones obtenidas desde la base de datos mediante una solicitud AJAX a un archivo PHP. El archivo PHP se conecta a la base de datos, obtiene las ubicaciones y las devuelve en formato JSON para ser mostradas en el mapa.



Para obtener permisos de ubicación en una aplicación Android, necesitas agregar el permiso correspondiente en el archivo AndroidManifest.xml. Aquí te muestro cómo hacerlo:

1.	Abre el archivo AndroidManifest.xml en tu proyecto Android. Por lo general, se encuentra en la carpeta app/src/main de tu proyecto.
2.	Dentro de las etiquetas <manifest> y </manifest>, agrega la siguiente línea de código para solicitar el permiso de ubicación precisa (ACCESS_FINE_LOCATION):

```xml
<uses-permission android:name="android.permission.ACCESS_FINE_LOCATION" /> 
```


El código anterior solicita permiso para acceder a la ubicación precisa del dispositivo. Si tu aplicación necesita acceso a la ubicación aproximada, puedes usar ACCESS_COARSE_LOCATION en lugar de ACCESS_FINE_LOCATION. Sin embargo, si tu aplicación requiere una ubicación más precisa, como para aplicaciones de navegación o rastreo, ACCESS_FINE_LOCATION es más adecuado.
Después de agregar este permiso en el archivo AndroidManifest.xml, tu aplicación debería solicitar estos permisos al usuario al momento de la instalación o cuando la aplicación intente acceder a la ubicación del dispositivo por primera vez.

