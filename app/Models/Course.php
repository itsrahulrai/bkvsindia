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
        'slug',
        'duration',
        'image',
        'thumbnail',
        'content',
        'sidecontent',
        'mode',
        'eligibility',
        'fees',
        'status',
        'skill_level',
        'price',
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

    public function children()
    {
        return $this->hasMany(Course::class, 'parent_id', 'id');
    }


}
