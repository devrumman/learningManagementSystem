<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

       protected $fillable = [
        'fullname',
        'designation',
        'slug',
        'overview',
        'phone',
        'address',
        'email',
        'fiverr_batch_img',
        'fiverr_url',
        'upwork_batch_img',
        'upwork_url',
        'mentor_profile_img',
        'status'
    ];
}
