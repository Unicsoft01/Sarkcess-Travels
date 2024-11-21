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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default('SarkcessConsults');
            $table->string('email')->nullable()->default('info@SarkcessConsults.org');
            $table->string('phone')->nullable()->default('+234 90 1234 5678');
            $table->string('year')->nullable()->default('2024');
            $table->string('description')->nullable()->default('Consultation, Visa, Student portal LTD');
            $table->string('logo_light')->nullable()->default('logos/srka.png');
            $table->string('logo_dark')->nullable()->default('#');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};