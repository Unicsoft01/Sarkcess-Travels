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
        Schema::create('how_to_applies', function (Blueprint $table) {
            $table->id('app_id');

            $table->unsignedBigInteger('section_id')
                ->index();

            
            $table->string('step1');
            $table->string('description1');
            $table->string('step2');
            $table->string('description2');
            $table->string('step3');
            $table->string('description3');
            $table->string('status')->enum(['show', 'hide'])->nullable();
            $table->timestamps();
        });
        
        Schema::table('how_to_applies', function ($table) {
            $table->foreign('section_id')
                ->references('section_id')
                ->on('section_texts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('how_to_applies');
    }
};