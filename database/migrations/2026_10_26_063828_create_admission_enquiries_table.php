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
        Schema::create('admission_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('parent_name');
            $table->string('ward_name');
            $table->string('mobile_number', 20);
            $table->string('applying_class')->nullable();
            $table->string('academic_year', 50)->default('2026-27');
            $table->text('notes')->nullable();
            $table->string('status', 30)->default('new'); // new, contacted, follow_up, admitted, closed
            $table->text('admin_notes')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_enquiries');
    }
};
