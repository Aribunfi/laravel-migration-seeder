<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->integer('id');
            $table->string('azienda');
            $table->string('da');
            $table->string('a');
            $table->dateTime('partenza');
            $table->dateTime('arrivo');
            $table->string('codice');
            $table->smallInteger('carrozze');
            $table->boolean('puntuale');
            $table->boolean('cancellato');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {

            $table->dropColumn('azienda');
            $table->dropColumn('da');
            $table->dropColumn('a');
            $table->dropColumn('partenza');
            $table->dropColumn('arrivo');
            $table->dropColumn('codice');
            $table->dropColumn('carrozze');
            $table->dropColumn('puntuale');
            $table->dropColumn('cancellato');
        });
    }
};
