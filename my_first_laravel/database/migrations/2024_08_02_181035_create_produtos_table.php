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
        Schema::create('produtos', function (Blueprint $table) {
            $table->string('id')->primary();

            //Adicionando os atributos presentes no model Produto
            $table->string('name')->nullable(); //nullable() permite vazio;
            $table->string('descricao')->nullable();
            $table->decimal('preco',8,2); //8 caracteres com 2 decimais 12345678,12
            $table->integer('quantidade');

            $table->timestamps(); //Marca a anotação de data. Registra a hora em que o banco foi criado
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};



//php artisan migrate. Atualiza a pagina

