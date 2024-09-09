<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;


    //boot
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($publication) {

            if (empty($publication->views)) {
                $publication->views = 0;
            }
            if (empty($publication->downloads)) {
                $publication->downloads = 0;
            }
            if (empty($publication->likes)) {
                $publication->likes = 0;
            }

            if (empty($publication->dislikes)) {
                $publication->dislikes = 0;
            }
            if (empty($publication->comments)) {
                $publication->comments = 0;
            }
            if (empty($publication->shares)) {
                $publication->shares = 0;
            }

            $query = "Create tags for publication seperated with ',': \"$publication->title.\", Repond with tags  Only, Don't add any extra information.";
            $ai_answer =  null;
            try {
                $ai_answer = Utils::get_ai_answer($query);
            } catch (\Throwable $th) {
                $ai_answer = null;
            }
            if ($ai_answer != null) {
                $publication->tags = $ai_answer;
            } else {
            }
            return $publication;
        });

        //updating
        static::updating(function ($publication) {
            $query = "Create tags for publication seperated with ',': \"$publication->title.\", Repond with tags  Only, Don't add any extra information.";
            $ai_answer =  null;
            try {
                $ai_answer = Utils::get_ai_answer($query);
            } catch (\Throwable $th) {
                $ai_answer = null;
            }
            if ($ai_answer != null) {
                $publication->tags = $ai_answer;
            } else {
            }
            return $publication; 
        });
    }
}
