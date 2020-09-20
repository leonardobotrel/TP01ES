<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImoveisTable extends Migration
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
            $table->integer('tipo'); //1Casa 2 para apartamento
            $table->integer('qtdquartos');
            $table->integer('qtdsalasestar');
            $table->integer('qtdvagasgaragem')->nullable();
            $table->double('area', 10, 2)->nullable();
            $table->boolean('armariosembutidos')->nullable();
            $table->string('descricao');
            $table->integer('qtdsalasjantar');
            $table->integer('qtdsuites')->nullable();
            $table->integer('andar')->nullable();
            $table->double('valorcondominio')->nullable();
            $table->boolean('portaria24h')->nullable();
            $table->double('preco', 10, 2)->nullable();
            $table->string('rua')->nullable();
            $table->string('Bairro')->nullable();
            $table->string('Cidade')->nullable();
            $table->integer("CEP")->lenght(8)->nullable();
            $table->string('Estados')->nullable();
            $table->string('Pais')->nullable();
            $table->integer('Numero')->nullable();
            $table->string('Complemento')->nullable();
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
        Schema::dropIfExists('Imoveis');
    }
}
