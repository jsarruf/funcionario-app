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
        Schema::create('tb_funcionario', function (Blueprint $table) {
            $table->id();
            $table->string('fun_nome');
            $table->string('fun_email')->unique();
            $table->string('fun_cpf')->unique();
            $table->unsignedInteger('fun_idade');
            $table->biginteger('dept_cod')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_funcionario');
    }
};
