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
        Schema::create('tac', function (Blueprint $table) {
            $table->id();
            $table->string('tac', 14)->nullable(false);
            $table->string('model_xinit', 256)->nullable(false)->default('0');
            $table->string('model_omsk', 256)->nullable(false)->default('0');
            $table->string('info_omsk', 256)->nullable(false)->default('0');
            $table->string('standart', 16)->nullable(false)->default('0');
            $table->string('sim',32 )->nullable(false)->default('0');
            $table->string('gsm', 256)->nullable(false)->default('0');
            $table->string('imei1', 64)->nullable(false)->default('0');
            $table->string('imei2', 64)->nullable(false)->default('0');
            $table->string('form', 8)->nullable(false)->default('0');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tac');
    }
};
