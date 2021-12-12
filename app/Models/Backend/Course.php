<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

      protected $fillable = [
        'english_titel',
        'bangla_titel',
        'slug',
        'intro_video',
        'price',
        'bangla_price',
        'graduate_number',
        'total_lecture',
        'class_hour',
        'course_duration',
        'motivational_content',
        'course_opportunity',
        'course_requirment',
        'curriculam_description',
        'coupon_status',
        'status',
        'image'
    ];
    
}
