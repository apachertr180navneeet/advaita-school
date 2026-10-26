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
        Schema::create('academic_results', function (Blueprint $table) {
            $table->id();
            $table->string('category', 32)->index(); // board, olympiad, abacus, iit_foundation, competitive
            $table->string('academic_year', 32)->index(); // 2025-26, 2024-25, etc.
            $table->string('title');
            $table->string('exam_name');
            $table->string('student_name');
            $table->string('class_grade')->nullable();
            $table->string('score')->nullable();
            $table->string('rank')->nullable();
            $table->string('photo')->nullable();
            $table->string('certificate')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_results');
    }
};
