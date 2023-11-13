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
        Schema::create('tb_waifu', function (Blueprint $table) {
            $table->id();
            $table->string('waifu_name');
            $table->string('waifu_anime');
            $table->date('waifu_birth');
            $table->integer('waifu_age');
            $table->longText('waifu_deskription');
            $table->longText('waifi_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waifus');
    }
};
