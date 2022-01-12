var iconUser = "https://i.imgur.com/FdagUpZ.png";
var iconCentro = "https://i.imgur.com/dvU02VB.png";

function dibujarRuta(_map, inicio, fin) {
  var display = new window.google.maps.DirectionsRenderer();
  var services = new window.google.maps.DirectionsService();
  display.setMap(_map);
  // Se genera la solicitud de calculo
  var request = {
    origin: inicio,
    destination: fin,
    travelMode: "DRIVING" // Definimos que la via sera manejando
  };

  services.route(request, function (result, status) {
    //Cuando Google termino de calcular
    // Nos retorna la peticion con un OK
    if (status === "OK") {
      //Se pinta la ruta
      display.setDirections(result);
    }
  });
}

function dibujarCentros(_map, _centros) {
  for (var i = 0; _centros.length > i; i++) {
    // Crear el marcador en maps
    // map: es una instancia de google maps
    // _centros[i]: es una ubicacion
    addCentro(_map, _centros[i]);
  }
}

function cargarCentros(_map, _gps) {
  //Llamamos a una ruta del backend
  //Para que nos retorne la lista de centros de ubicacion
  //registradas en el backend
  $.ajax({
    dataType: "json",
    url: "/final/consultas/traer_centros.php",
    data: _gps,
    success: function (respuesta) {
      for(var i=0; respuesta["puntos"].length>i; i++){
        respuesta["puntos"][i]["gps"]["lat"]=parseFloat(respuesta["puntos"][i]["gps"]["lat"]);
        respuesta["puntos"][i]["gps"]["lng"]=parseFloat(respuesta["puntos"][i]["gps"]["lng"]);

      }
      //Pinta la informacion
      dibujarCentros(_map, respuesta["puntos"]);
    },
    error: function () {
      // Este error salta cuando
      // La ruta no existe.
      // Hay error en el servidor.
      // El programador no hizo algo bien en el backend
      alert("Lo sentimos, no pudimos cargar la informacion");
    }
  });
}

function addLugar(_map, latLong, _icon, _name, npersonas, centro_id, nvac) {
  var contenido;
  // tengo que diferenciar, si se trata de un centro
  // o de el usuario
  var miubicacion = false;
  var dni="00000000";
  if (npersonas <= -1) {
    miubicacion = true;
  }

  //declaramos el contenido de la burbuja cuando
  //el usuario haga click en el marcador
  if (miubicacion) {
    contenido = "";
  } else {
    contenido = "<br><strong>" + nvac + " vacunas disponibles.</strong><br><strong>" + npersonas + " personas en cola.</strong>";
    contenido += "<div><a href='/final/consultas/crearcita.php?centro_id="+centro_id+"&dni="+dni+"'>Reservar cita</a></div>" 
  }

  // Finalmente aqui se pinta el marcador
  var marker = new window.google.maps.Marker({
    position: latLong, // latitud
    map: _map, //instancia
    icon: _icon, // icono
    title: _name // el titulo
  });

  // creamos la burbuja
  var infoWindow = new window.google.maps.InfoWindow();
  function dibujarCuadro(){
    infoWindow.close();
    infoWindow.setContent(marker.getTitle() + contenido);
    infoWindow.open(marker.getMap(), marker);
  }
  // Definimos el comportamiento del click,
  // cuando el usuario haga clic en el marcador
  marker.addListener("click", () => {
    dibujarCuadro();
    // Si el click es en el usuario
    // no ocurre nada
    if (miubicacion) {
    } else {
      // Si el clic es en un centro
      //Calculo la ruta desde la ubicacion
      //del usuario hacia la ubicacion
      //del centro.
      // Para esto, se tuvo que habiltar la API Direcciones
      // En Google Maps
      dibujarRuta(_map, window.ubicacion, latLong);
    }
  });
  dibujarCuadro();
  // console.log("xD");
}

function addUser(_map, _data) {
  addLugar(_map, _data, iconUser, "Mi ubicacion", -1, -1);
}

function addCentro(_map, _data) {
  //Agregar el marcador en maps
  //_map: la instancia de google maps
  // _data.gps, lat y longitud
  // _data.nombre, nombre del centro
  // _data.nlugares, es el numero de personas en cola
  addLugar(_map, _data.gps, iconCentro, _data.nombre, _data.nlugares, _data.id, _data.nvacunas);
}

function iniciarMap() {
  //const myLatLng = { lat: -12.05589584798976, lng: -75.21376547328497 };
  var myLatLng = window.ubicacion;
  var mapProp = {
    center: new window.google.maps.LatLng(myLatLng),
    zoom: 14
  };
  var styles = {
    hide: [
      {
        featureType: "poi.business",
        stylers: [{ visibility: "off" }]
      },
      {
        featureType: "transit",
        elementType: "labels.icon",
        stylers: [{ visibility: "off" }]
      }
    ]
  };

  var map = new window.google.maps.Map(document.getElementById("map"), mapProp);
  // Limpiar otros marcadores
  map.setOptions({ styles: styles["hide"] });

  // Pintamos la ubicacion del usuario
  addUser(map, window.ubicacion);
  // Buscamos los centros de vacunacion
  cargarCentros(map, window.ubicacion);
}
