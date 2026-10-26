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
        Schema::create('fee_structures', function (Blueprint $table) {
            $table->id();
            $table->string('class_name'); // e.g. Nursery, LKG, UKG, Class 1 ... Class 10
            $table->string('academic_year', 50)->default('2026-27');
            $table->string('wing', 30)->default('primary'); // pre_primary, primary, secondary
            $table->decimal('admission_fee', 10, 2)->nullable()->default(0);
            $table->decimal('tuition_fee', 10, 2)->nullable()->default(0);
            $table->decimal('development_fee', 10, 2)->nullable()->default(0);
            $table->decimal('exam_fee', 10, 2)->nullable()->default(0);
            $table->decimal('annual_total', 10, 2)->nullable()->default(0);
            $table->decimal('term1_fee', 10, 2)->nullable()->default(0);
            $table->decimal('term2_fee', 10, 2)->nullable()->default(0);
            $table->decimal('term3_fee', 10, 2)->nullable()->default(0);
            $table->boolean('is_published')->default(false);
            $table->text('notes')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fee_structures');
    }
};
