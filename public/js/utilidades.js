$(document).ready(function () {
    $('#monotributo').change(function () {
        if (this.checked)
           $('#selectMonotributo').show();
    });
    $('#responsableInscripto').change(function () {
        if (this.checked)
           $('#selectMonotributo').hide();
    });

    $( "#codigoActividadPrincipal" ).autocomplete({
        source: "livesearch",
        minLength: 1,
      });

});


// MAPA DE GEOLOCALIZACION PARA DOMICILIO ACTIVIDAD
let map;
let marker;
function initMap() {
    console.log("Iniciando mapa para gelolocalizacion de domicilio");
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -29.4205291,lng: -66.8574402},
    zoom: 12,
  });

  map.addListener("click", (e) => {
    console.log("Click en el mapa, agregando marcador");
    console.log(e.latLng);
    if(marker!=null){
        marker.setMap(null);
    }
    marker = new google.maps.Marker({
        position: e.latLng,
        map,
        title: "Domicilio de Actividad",
      });

      //seteo de valores en los inputs
      document.getElementById("domicilioActividadLatitud").value = e.latLng.lat();
      document.getElementById("domicilioActividadLongitud").value = e.latLng.lng();


  });

}
