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
        Schema::create('tb_husbando', function (Blueprint $table) {
            $table->id();
            $table->string('husbando_name');
            $table->string('husbando_anime');
            $table->integer('husbando_age');
            $table->longText('husbando_deskription');
            $table->longText('husbando_image');
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
