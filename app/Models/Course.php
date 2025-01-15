<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'name',
        'duration',
        'mode',
        'eligibility',
        'fees',
        'status',
    ];

     // Define relationship with Admissions
     public function admissions()
     {
         return $this->hasMany(Admission::class);
     }

    
     public function parent()
     {
         return $this->belongsTo(Course::class, 'parent_id');
     }

     public function courseSubjects()
    {
        return $this->hasMany(CourseSubject::class, 'course_detail_id', 'id');
    }

}
