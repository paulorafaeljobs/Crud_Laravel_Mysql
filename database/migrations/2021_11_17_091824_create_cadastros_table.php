<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
            $table->id();
            $table->string('nome',50)->nullable()->default(NULL);
            $table->string('cpf',15)->nullable()->default(NULL);
            $table->string('nascimento',13)->nullable()->default(NULL);
            $table->text('img')->nullable()->default(NULL);
            $table->string('endereco',50)->nullable()->default(NULL);
            $table->string('bairro',20)->nullable()->default(NULL);
            $table->string('cep',15)->nullable()->default(NULL);
            $table->string('municipio',15)->nullable()->default(NULL);
            $table->string('email')->nullable()->default(NULL);
            $table->integer('status')->nullable()->default(NULL);
            $table->integer('qt')->nullable()->default(NULL);
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
        Schema::dropIfExists('cadastros');
    }
}
