<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;

    protected $fillable = [
        'center_code',
        'institute_name',
        'director',
        'mobile',
        'phone',
        'email',
        'space_available',
        'number_of_lab_rooms',
        'state',
        'city',
        'address',
        'address1',
        'message',
        'status',
        'date',
        'pincode',
        'website',
        'password',
        'certificate',
        'certificateImage'
    ];

     // Define relationship with Admissions
     public function admissions()
     {
         return $this->hasMany(Admission::class);
     }
}
