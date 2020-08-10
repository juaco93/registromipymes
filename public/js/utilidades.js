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
