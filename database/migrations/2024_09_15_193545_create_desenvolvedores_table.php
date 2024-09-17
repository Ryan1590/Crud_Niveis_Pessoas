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
        Schema::create('desenvolvedores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nivel_id')->constrained('niveis'); // Chave estrangeira para a tabela 'niveis'
            $table->string('nome');
            $table->string('sexo');
            $table->date('data_nascimento');
            $table->string('hobby')->nullable();  // Campo 'hobby' do tipo varchar, pode ser nulo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desenvolvedores');
    }
};
