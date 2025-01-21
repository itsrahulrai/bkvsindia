<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marksheet extends Model
{
    use HasFactory;
    protected $fillable = [
        'admission_id',
        'course_id', 
        'center_id', 
        'type', 
        'subjects_data',
        'subjects_data2',
        'status',
    ];

     protected $casts = [
        'subjects_data' => 'array',
        'subjects_data2' => 'array',
    ];
   
    
    public function admission()
    {
        return $this->belongsTo(Admission::class);
    }

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class , 'course_id');
    }

   
    

    public function subjects()
    {
        return $this->hasManyThrough(
            CourseSubject::class,
            CourseDetail::class,
            'course_id',       // Foreign key on CourseDetail
            'course_detail_id', // Foreign key on CourseSubject
            'course_id',       // Local key on Marksheet
            'id'               // Local key on CourseDetail
        );
    }
    


   
    


}
