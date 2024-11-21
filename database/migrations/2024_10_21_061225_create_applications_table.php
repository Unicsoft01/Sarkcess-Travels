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
        Schema::create('applications', function (Blueprint $table) {
            $table->id('appication_id');

            $table->unsignedBigInteger('university_id')
                ->index();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('qualification');
            $table->string('country');
            $table->string('state');
            $table->string('budget');
            $table->timestamps();
        });

        Schema::table('applications', function ($table) {
            $table->foreign('university_id')
                ->references('university_id')
                ->on('universities')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};