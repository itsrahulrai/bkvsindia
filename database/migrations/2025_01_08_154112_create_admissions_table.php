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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('center_id')->constrained('centers')->onDelete('cascade'); 
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->date('registration_date')->nullable(); // Registration Date
            $table->string('enroll_no')->unique(); // Enroll No (Unique)
            $table->string('roll_no')->unique()->nullable(); // Roll No (Unique and Optional)
            $table->string('student_name'); // Student Name
            $table->string('father_name'); // Father Name
            $table->string('mother_name'); // Mother Name
            $table->enum('gender', ['male', 'female']); // Gender
            $table->date('dob');
            $table->string('semester'); // Semester
            $table->date('registration_year'); // Registration Year
            $table->integer('tenth_passing_year'); // 10th Passing Year
            $table->integer('twelfth_passing_year'); // 12th Passing Year
            $table->string('mobile_no'); // Mobile No
            $table->string('alternate_contact_no')->nullable(); // Alternate Contact No.
            $table->string('email')->nullable(); // Email
            $table->string('state'); // State
            $table->string('city'); // City
            $table->string('address'); // City
            $table->string('course_program'); // Course Program

            $table->string('start_session'); // Start Session
            $table->string('end_session'); // End Session

            $table->string('academic_year'); // Academic Year

              // New columns for 1st and 2nd Year Sessions
            $table->string('start_session_first')->nullable(); // 1st Year Start Session
            $table->string('end_session_first')->nullable(); // 1st Year End Session
            $table->string('start_session_second')->nullable(); // 2nd Year Start Session
            $table->string('end_session_second')->nullable(); // 2nd Year End Session
            
            
            // Educational Details
            $table->string('year_10th')->nullable(); // 10th Year
            $table->string('stream_10th')->nullable(); // Stream for 10th
            $table->string('board_university_10th')->nullable(); // Board/University for 10th
            $table->string('result_10th')->nullable(); // Result for 10th
            
            $table->string('year_12th')->nullable(); // 12th Year
            $table->string('stream_12th')->nullable(); // Stream for 12th
            $table->string('board_university_12th')->nullable(); // Board/University for 12th
            $table->string('result_12th')->nullable(); // Result for 12th
            
            $table->string('other_year')->nullable(); // Other Year
            $table->string('other_stream')->nullable(); // Other Stream
            $table->string('other_board_university')->nullable(); // Other Board/University
            $table->string('other_result')->nullable(); // Other Result
            
            $table->text('remarks')->nullable(); // Remarks
            
            // File Uploads
            $table->string('photo')->nullable(); // Photo
            $table->string('tenth_image')->nullable(); // 10th Image
            $table->string('twelfth_image')->nullable(); // 12th Image
            $table->string('graduation_image')->nullable(); // Graduation Image
            $table->string('post_graduation_image')->nullable(); // Post Graduation Image
            $table->string('id_proof')->nullable(); // ID Proof
            $table->string('other_document')->nullable(); // Other Document
            $table->enum('status', ['active', 'inactive'])->default('active');
    
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
