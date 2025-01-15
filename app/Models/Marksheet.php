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
        'status',
    ];

     protected $casts = [
        'subjects_data' => 'array',
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
}
