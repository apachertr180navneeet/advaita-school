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
        Schema::create('online_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('application_no')->unique()->nullable();

            // Step 1: General & Admission Details
            $table->string('username')->nullable();
            $table->string('email')->nullable();
            $table->string('full_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('branch')->nullable();
            $table->string('academic_year')->nullable();
            $table->string('parent_course')->nullable();
            $table->string('applying_class')->nullable();
            $table->string('highest_qualification')->nullable();
            $table->string('percentage')->nullable();
            $table->string('year_passed')->nullable();
            $table->string('prev_school_name')->nullable();
            $table->text('prev_school_address')->nullable();

            // Step 2: Personal Details
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('caste')->nullable();
            $table->string('mother_tongue')->nullable();
            $table->string('aadhar_no')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_phone')->nullable();

            // Step 3: Contact Details
            $table->text('residential_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->string('transportation_required')->nullable();

            // Step 4: Documents & Status
            $table->string('student_photo_path')->nullable();
            $table->string('birth_certificate_path')->nullable();
            $table->string('prev_marksheet_path')->nullable();
            $table->string('transfer_certificate_path')->nullable();
            $table->boolean('declaration_accepted')->default(false);
            $table->string('status')->default('submitted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_registrations');
    }
};
