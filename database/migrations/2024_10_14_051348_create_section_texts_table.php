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
        Schema::create('section_texts', function (Blueprint $table) {
            $table->id('section_id');
            $table->string('section_title')->nullable();
            $table->string('section_sub_title')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_texts');
    }
};