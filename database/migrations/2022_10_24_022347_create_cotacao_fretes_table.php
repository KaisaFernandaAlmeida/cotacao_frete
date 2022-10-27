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
        Schema::create('cotacao_fretes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uf',2);
            $table->decimal('percentual_cotacao'); //validar inserir registro somente com ponto
            $table->decimal('valor_extra');
            $table->integer('transportadora_id');
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
        Schema::dropIfExists('cotacao_fretes');
    }
};
