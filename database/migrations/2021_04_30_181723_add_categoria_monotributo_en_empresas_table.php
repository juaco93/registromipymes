<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoriaMonotributoEnEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empresas', function (Blueprint $table) {
            $table->foreignId('categoriaMonotributo')->nullable()->after('inscripcionAFIP')->constrained('afip_categoria_monotributos');
            // $table->foreign('categoriaMonotributo')->references('id')->on('afip_categoria_monotributos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empresas', function (Blueprint $table) {
            $table->dropForeign(['categoriaMonotributo']);
            $table->dropColumn('categoriaMonotributo');
        });
    }
}
