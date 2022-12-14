<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cohort',
        'img_url',
        'members'
    ];

    // this function makes sure the right image gets loaded on the show page of each student
    public function getImageAttribute()
    {
        if ($this->img_url == null)
        {
            return '/img/student-icon.png';
        }

        return $this->img_url;
    }
}
