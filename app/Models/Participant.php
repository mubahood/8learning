<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    //boot
    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($course) {
           // throw new \Exception('Course cannot be deleted');
        });
        //creating
        static::creating(function ($model) {
            $couse = Course::find($model->course_id);
            if ($couse == null) {
                throw new \Exception('Course cannot be created');
            }
            //check if alraedy subscribed
            $participant = Participant::where('user_id', $model->user_id)->where('course_id', $model->course_id)->first();
            if ($participant != null) {
                throw new \Exception('Course already subscribed');
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //belongs to course
    public function course()
    {
        return $this->belongsTo(Course::class);
    } 
}
