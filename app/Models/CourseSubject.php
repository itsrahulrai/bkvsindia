<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSubject extends Model
{
    use HasFactory;

    protected $fillable = ['course_detail_id', 'subject_code', 'subject_name', 'minimum_marks', 'maximum_marks'];

    // Relationship with CourseDetail
    public function courseDetail()
    {
        return $this->belongsTo(CourseDetail::class);
    }
}
