<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Imoveis', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo');
            $table->integer('qtdquartos');
            $table->integer('qtdsuites');
            $table->integer('qtdsalasestar');
            $table->integer('qtdvagasgaragem');
            $table->double('area');
            $table->boolean('armariosembutidos');
            $table->string('descricao');
            $table->integer('qtdsalasjantar');
            $table->integer('qtdsuites');
            $table->integer('andar');
            $table->double('valorcondominio');
            $table->boolean('portaria24h');
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
        Schema::dropIfExists('plans');
    }
}
