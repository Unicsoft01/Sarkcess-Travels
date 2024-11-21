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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id('post_id');
            $table->string('post_title');

            $table->unsignedBigInteger('user_id')
                ->index();

            $table->string('thumbnail')->default('blog-img1.jpg');
            $table->longText('post');
            $table->string('slug')->unique();
            $table->timestamps();
        });
        Schema::table('blogs', function ($table) {
            $table->foreign('user_id')
                ->references('user_id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
