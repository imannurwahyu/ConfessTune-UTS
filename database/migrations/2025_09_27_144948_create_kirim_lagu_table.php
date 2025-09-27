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
        Schema::create('kirim_lagu', function (Blueprint $table) {
            $table->id();
            $table->string('to');
            $table->unsignedBigInteger('lagu_id');
            $table->text('pesan');
            $table->timestamps();

            $table->foreign('lagu_id')->references('id')->on('lagu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kirim_lagu');
    }
};
