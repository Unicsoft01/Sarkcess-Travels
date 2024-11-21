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
        Schema::create('universities', function (Blueprint $table) {
            $table->id('university_id');
            $table->string('university');
            $table->string('thumbnail')->default('blog-img3.jpg');
            $table->string('slug')->unique();

            $table->unsignedBigInteger('country_id')
                ->index();
            $table->unsignedBigInteger('post_id')
                ->index();

            $table->timestamps();
        });
        Schema::table('universities', function ($table) {
            $table->foreign('country_id')
                ->references('country_id')
                ->on('countries')
                ->onDelete('cascade');
        });
        Schema::table('universities', function ($table) {
            $table->foreign('post_id')
                ->references('post_id')
                ->on('about_universities')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};