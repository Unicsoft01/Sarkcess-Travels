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
        Schema::create('free_advice_applications', function (Blueprint $table) {
            $table->id('application_id');
            $table->string('fullname');
            $table->string('qualification');
            $table->string('email');
            $table->string('purpose')->default('others');
            $table->string('country');
            $table->string('zip')->nullable();
            $table->string('phone');
            $table->longText('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('free_advice_applications');
    }
};