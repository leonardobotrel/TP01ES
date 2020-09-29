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
        
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo'); //1Casa 2 para apartamento
            $table->integer('qtdquartos');
            $table->integer('qtdsalasestar');
            $table->integer('qtdvagasgaragem');
            $table->double('area', 10, 2);
            $table->boolean('armariosembutidos');
            $table->string('descricao')->nullable();
            $table->integer('qtdsalasjantar')->nullable();
            $table->integer('qtdsuites');
            $table->integer('andar')->nullable();
            $table->double('valorcondominio')->nullable();
            $table->boolean('portaria24h')->nullable();
            $table->double('preco', 10, 2);
            $table->string('rua');
            $table->string('Bairro');
            $table->string('Cidade');
            $table->integer("CEP")->lenght(8);
            $table->string('Estados');
            $table->string('Pais');
            $table->integer('Numero');
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
        Schema::dropIfExists('imoveis');
    }
}
