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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 100);
            $table->string('stazione_partenza', 50);
            $table->string('stazione_arrivo', 50);
            $table->date('orario_partenza');
            $table->date('orario_arrivo');
            $table->string('codice_treno', 10);
            $table->smallInteger('numero_carrozze')->unsigned();
            $table->boolean('in_orario')->default(1);
            $table->boolean('cancellato')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
