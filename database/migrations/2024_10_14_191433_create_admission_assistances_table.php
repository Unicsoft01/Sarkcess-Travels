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
        Schema::create('admission_assistances', function (Blueprint $table) {
            $table->id('ad_id');

            $table->unsignedBigInteger('section_id')
            ->index();

            $table->unsignedBigInteger('post_id')
            ->index();

            $table->string('short_name')->nullable();
            $table->string('fullname')->nullable();
            $table->string('slug')->nullable()->unique();
            // $table->string('body')->nullable();
            $table->timestamps();
        });

        Schema::table('admission_assistances', function ($table) {
            $table->foreign('section_id')
                ->references('section_id')
                ->on('section_texts')
                ->onDelete('cascade');
        });

        Schema::table('admission_assistances', function ($table) {
            $table->foreign('post_id')
                ->references('post_id')
                ->on('posts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_assistances');
    }
};