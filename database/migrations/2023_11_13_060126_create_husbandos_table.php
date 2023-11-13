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
        Schema::create('tb_husbandos', function (Blueprint $table) {
            $table->id();
            $table->string('husbando_name');
            $table->string('husbando_anime');
            $table->int('husbando_age');
            $table->str
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('husbandos');
    }
};
