<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $fillable = [
        'center_id',
        'student_name',
        'course_id',
        'gender',
        'dob',
        'registration_date',
        'roll_no',
        'enroll_no',
        'mobile_no',
        'alternate_contact_no',
        'email',
        'semester',
        'registration_year',
        'tenth_passing_year',
        'twelfth_passing_year',
        'state',
        'city',
        'course_program',
        'start_session',
        'end_session',
        'start_session_first',
        'end_session_first',
        'start_session_second',
        'end_session_second',
        'remarks',
        'year_10th',
        'stream_10th',
        'board_university_10th',
        'result_10th',
        'year_12th',
        'stream_12th',
        'board_university_12th',
        'result_12th',
        'other_year',
        'other_stream',
        'other_board_university',
        'other_result',
        'father_name',
        'mother_name',
        'photo',
        'tenth_image',
        'twelfth_image',
        'graduation_image',
        'post_graduation_image',
        'id_proof',
        'other_document'
    ];

      // Define relationship with Center
      public function center()
      {
          return $this->belongsTo(Center::class);
      }
  
      // Define relationship with Course
      public function course()
      {
          return $this->belongsTo(Course::class);
      }
}
