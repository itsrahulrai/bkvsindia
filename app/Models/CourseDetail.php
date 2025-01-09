<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'semester', 'statement_mark','status'];

    public function subjects()
    {
        return $this->hasMany(CourseSubject::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
