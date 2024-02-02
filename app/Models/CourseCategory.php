<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;

    //boot
    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($category) {
            $category->courses()->delete();
        });

        //creating make parent_id =  0  if null or empty
        static::creating(function ($category) {
            if (empty($category->parent_id)) {
                $category->parent_id = 0;
            }
        }); 
    } 

    public static function parents()
    {
        return CourseCategory::where(['parent_id' => null])->get();
    }
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
