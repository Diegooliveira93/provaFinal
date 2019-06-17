<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarProdutos extends Migration
{
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('url');
            $table->text('descricao');
            $table->decimal('preco_parcela', 11, 2);
            $table->decimal('preco_total', 11, 2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
