<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {
        $top_courses = Course::where([
            'visibility' => 1,
        ])->orderBy('id', 'Desc')
            ->limit(6)
            ->get();
        return view('index', [
            'top_courses' => $top_courses
        ]);
    }
}
