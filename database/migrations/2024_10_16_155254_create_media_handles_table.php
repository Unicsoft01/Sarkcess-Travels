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
        Schema::create('media_handles', function (Blueprint $table) {
            $table->id();
            $table->string('twitter')->default('#');
            $table->string('facebook')->default('#');
            $table->string('gmail')->default('#');
            $table->string('youtube')->default('#');
            $table->string('insta')->default('#');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_handles');
    }
};