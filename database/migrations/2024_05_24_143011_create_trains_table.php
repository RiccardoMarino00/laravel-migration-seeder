<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->string('azienda', 100);
            $table->string('stazione_di_partenza', 100);
            $table->string('stazione_di_arrivo', 100);
            $table->time('orario_di_partenza', '');
            $table->time('orario_di_arrivo', '');
            $table->string('codice_treno', 100);
            $table->bigInteger('numero_carrozze');
            $table->tinyInteger('in_orario');
            $table->tinyInteger('cancellato');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
