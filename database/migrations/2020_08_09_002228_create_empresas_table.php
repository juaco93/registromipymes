<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {

            // PASO 1 - DATOS FISCALES
            $table->id();
            $table->string('cuit');
            $table->string('titularApellido');
            $table->string('titularNombre');
            $table->string('titularDNI');
            $table->string('titularSexo');
            $table->string('titularCalle');
            $table->string('titularNumero');
            $table->string('titularPiso')->nullable();
            $table->string('titularDepto')->nullable();
            $table->string('titularTelefonoPersonal');
            $table->string('titularTelefonoEmpresa');
            $table->string('titularLocalidad');
            $table->string('titularCodigoPostal');
            $table->string('inscripcionAFIP');
            $table->string('numeroIngresosBrutos');
            $table->date('fechaInicioActividad');

            // PASO 2 - DOMICILIOS
            $table->string('domicilioLegalCalle');
            $table->string('domicilioLegalNumero');
            $table->string('domicilioLegalPiso');
            $table->string('domicilioLegalDepto');
            $table->string('domicilioLegalTelefono');
            $table->string('domicilioLegalLocalidad');
            $table->integer('domicilioLegalCodigoPostal');

            $table->string('domicilioActividadCalle');
            $table->string('domicilioActividadNumero');
            $table->string('domicilioActividadPiso');
            $table->string('domicilioActividadDepto');
            $table->string('domicilioActividadTelefono');
            $table->string('domicilioActividadLocalidad');
            $table->integer('domicilioActividadCodigoPostal');
            $table->string('domicilioActividadEmail');

            $table->string('domicilioContactoApellido');
            $table->string('domicilioContactoNombre');
            $table->string('domicilioContactoCargoEnLaEmpresa');
            $table->string('domicilioContactoTelefono');
            $table->string('domicilioContactoDomicilioElectronico');
            $table->string('domicilioContactoEmailAlternativo');


            // PASO 3 - CARACTERISTICAS DE LA ACTIVIDAD
            $table->string('sector');
            $table->string('rubro');
            $table->boolean('actividadFuentePrincipalIngresosSioNo');
            $table->integer('actividadFuentePrincipalIngresosPorcentaje');
            $table->string('actividadAQuienVende');
            $table->string('actividadClientesPaganCon');
            $table->string('actividadProveedoresDe');
            $table->string('actividadProveedoresDePorQue');

            // PASO 4 - INGRESOS Y GASTOS DE LA ACTIVIDAD
            $table->string('ingresosPromedioVentas');
            $table->boolean('inscriptoRegistroNacional');
            $table->string('espacioActividad');
            $table->float('montoAlquileres');
            $table->integer('cantidadPersonasFamiliares');
            $table->integer('cantidadPersonasRegistrados');
            $table->integer('cantidadPersonasNoRegistrados');
            $table->integer('cantidadPersonasTotal');
            $table->integer('cantidadPersonasPasantias');
            $table->integer('cantidadPersonasProgramas');
            $table->integer('cantidadPersonasMujeres');
            $table->integer('cantidadPersonasHombres');
            $table->float('promedioKWH');


            // PASO 5 - FINANCIAMIENTO
            $table->boolean('prestamosHaRecibidoSioNo');
            $table->string('prestamosEntidadFinanciera');
            $table->string('prestamosDestinoDeFondos');
            $table->string('prestamosRazonDelNoPrestamo');
            $table->boolean('prestamosTieneAlgunoActualmenteSioNo');
            $table->string('prestamosMediosDeInformacion');


            // PASO 6 - REALIDAD Y EXPECTATIVAS
            $table->string('medidasDeApoyo');
            $table->string('rendimientoNegocio');
            $table->string('comoAfectoLaPandemia');
            $table->string('expectativaTresAnios');
            $table->boolean('exportaSioNo');
            $table->boolean('exportaProximos12MesesSioNo');
            $table->boolean('exportaLeInteresaProfundizar');

            // Extras
            $table->boolean('certificado');
            $table->date('certificadoVencimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
