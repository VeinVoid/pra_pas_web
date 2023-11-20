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
        Schema::create('tb_animes', function (Blueprint $table) {
            $table->id("anime_id");
            $table->string("anime_name");
            $table->integer("rate");
            $table->date("release");
            $table->longText("sinopsis");
            $table->text("studio");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};
