<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCodigosActividadesEnEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empresas', function (Blueprint $table) {
            $table->foreignId('codigoActividadPrincipal')->after('categoriaMonotributo')->constrained('empresa_codigo_actividades');
            $table->foreignId('codigoActividadSecundaria')->nullable()->after('codigoActividadPrincipal')->constrained('empresa_codigo_actividades');
            $table->foreignId('codigoActividadTerciaria')->nullable()->after('codigoActividadSecundaria')->constrained('empresa_codigo_actividades');
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
            $table->dropForeign(['codigoActividadPrincipal']);
            $table->dropColumn('codigoActividadPrincipal');
            $table->dropForeign(['codigoActividadSecundaria']);
            $table->dropColumn('codigoActividadSecundaria');
            $table->dropForeign(['codigoActividadTerciaria']);
            $table->dropColumn('codigoActividadTerciaria');
        });
    }
}
