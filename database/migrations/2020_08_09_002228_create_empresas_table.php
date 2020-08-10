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
            $table->id();
            $table->integer('idsector');
            $table->integer('idcategoria');
            $table->integer('idTipoEmpresa');
            $table->integer('idDepartamento');
            $table->integer('idLocalidad');
            $table->integer('idEmpresaTipoSociedad');
            $table->string('cuit');
            $table->string('nombreFantasia');
            $table->string('numeroIngresosBrutos');
            $table->float('facturacion');
            $table->date('inicioActividad');
            $table->string('actividadPrincipal');
            $table->string('domicilioFiscal');
            $table->string('domicilioActividad');
            $table->string('responsable');
            $table->string('responsableDni');
            $table->string('razonSocial');
            $table->string('telefono');
            $table->string('email');
            $table->integer('idAfipCategoriaMonotributo');
            $table->float('superficieTotal');
            $table->integer('personalCantidad');
            $table->boolean('exporta');
            $table->text('observaciones');
            $table->text('necesidades');
            $table->boolean('certificado');
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
