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
        Schema::create('pillars', function (Blueprint $table) {
            $table->id();
            $table->integer('order')->default(1);
            $table->string('badge_number')->nullable();
            $table->string('theme_color')->default('orange');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image');
            $table->json('tags')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pillars');
    }
};
