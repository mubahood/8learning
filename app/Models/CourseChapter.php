<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseChapter extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function course_topics() 
    {
        return $this->hasMany(CourseTopic::class);
    }

    public $fillable = [
        'course_id',
        'name'
    ];

    //get dropdown list
    public static function getCourseChapterDropdown()
    {
        $course_chapters = CourseChapter::pluck('name', 'id');
        return $course_chapters;
    }
}
