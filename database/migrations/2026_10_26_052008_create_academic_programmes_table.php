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
        Schema::create('academic_programmes', function (Blueprint $table) {
            $table->id();
            $table->string('stage', 32)->index(); // pre_primary, primary, secondary
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('classes')->nullable(); // e.g. "Classes 1 to 5", "Nursery, LKG, UKG"
            $table->string('badge_text')->nullable();
            $table->text('description')->nullable();
            $table->json('features')->nullable();
            $table->json('subjects')->nullable();
            $table->string('image')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_programmes');
    }
};
