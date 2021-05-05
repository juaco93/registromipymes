$(document).ready(function () {
    $('#monotributo').change(function () {
        if (this.checked)
           $('#selectMonotributo').show();
    });
    $('#responsableInscripto').change(function () {
        if (this.checked)
           $('#selectMonotributo').hide();
    });

});

// MAPA DE GEOLOCALIZACION PARA DOMICILIO ACTIVIDAD
let map;
function initMap() {
    console.log("Iniciando mapa para gelolocalizacion de domicilio");
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  });
}
