<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\AiQuestion;
use App\Models\Publication;
use App\Models\Utils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('courses', function () {
    return view('courses');
})->name('courses');
Route::get('publications', function () {
    return view('publications');
})->name('publications');
Route::get('news', function () {
    return view('news');
})->name('news');
Route::get('podcast', function () {
    return view('podcast');
})->name('podcast');
Route::get('course', function () {
    return view('course');
})->name('course');
Route::get('news-post', function () {
    return view('news-post');
})->name('news-post');
Route::get('contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('slider', function () {
    return view('slider');
})->name('slider');
Route::get('about-us', function () {
    return view('about-us');
})->name('about-us');


Route::get('/register', [AccountController::class, 'register'])->name('register');

Route::get('/auth/login', [AccountController::class, 'login'])->name('login');
Route::get('login', function () {
    return redirect('/auth/login');
});

Route::post('/register', [AccountController::class, 'register_post'])
    /* ->middleware(RedirectIfAuthenticated::class) */;

Route::post('/login', [AccountController::class, 'login_post'])
    /* ->middleware(RedirectIfAuthenticated::class) */;

/* Route::get('/dashboard', [AccountController::class, 'dashboard'])
    ->middleware(Authenticate::class); */


Route::get('/account-details', [AccountController::class, 'account_details'])
    ->middleware(Authenticate::class);

Route::post('/account-details', [AccountController::class, 'account_details_post'])
    ->middleware(Authenticate::class);

Route::get('/logout', [AccountController::class, 'logout']);
Route::get('/get-tags', function (Request $request) {
    $pub = Publication::find($request->publication_id);
    if ($pub == null) {
        die('Publication not found');
    }

    $query = "Create tags for publication seperated with ',': \"$pub->title.\", Only tags without any explanation.";
    $ai_answer =  null;
    try {
        $resp = Utils::get_ai_answer($query);
        if (isset($resp['message'])) {
            $ai_answer = $resp['message'];
        }
    } catch (\Throwable $th) {
        $ai_answer = null;
    }
    if ($ai_answer != null) {
        $pub->tags = $ai_answer;
        $pub->save();
        die("Tags created: $ai_answer");
    } else {
        die("No tags created");
    }
})->name('get-tags');

Route::get('/get-ai-answer', function (Request $request) {
    $pub = AiQuestion::find($request->ai_question_id);
    if ($pub == null) {
        die('Publication not found');
    }

    $query = "\"$pub->question?\", In the answer, don't include \"M-Omulimisa\"";
    $ai_answer =  null;
    try {
        $resp = Utils::get_ai_answer($query);
        if (isset($resp['message'])) {
            $ai_answer = $resp['message'];
        }
        $pub->answer = $ai_answer;

        if (isset($resp['audio_url'])) {
            $pub->url = $resp['audio_url'];
        }
    } catch (\Throwable $th) {
        $ai_answer = null;
    }
    if ($ai_answer != null) {
        $pub->save();
        die("AI ANSWER: $ai_answer");
    } else {
        die("No ANSWER");
    }
})->name('get-ai-answer');
Route::get('/make-books', function () {

    return;
    $faker = Faker\Factory::create();

    //set unlimited memory limit
    ini_set('memory_limit', '-1');
    //set unlimited execution time
    ini_set('max_execution_time', 0);
    $max = 1000000;
    //start time
    $start = microtime(true);
    for ($x = 0; $x < $max; $x++) {
        $pub = new Publication();
        $pub->title = $faker->sentence(6, true);
        $pub->description = $faker->sentence(12, true);
        $pub->details = $faker->sentence(20, true);
        $pub->image = $faker->imageUrl(412, 582, 'books');
        $pub->file = $faker->fileExtension();
        $pub->tags = $faker->sentence(6, true);
        $pub->category = $faker->sentence(6, true);
        $pub->created_by_id = 1;
        $pub->author = $faker->name();
        $pub->other_authors = $faker->name();
        $pub->publication_year = $faker->year();
        $pub->publisher = $faker->company();
        $pub->isbn = $faker->isbn13();
        $pub->pages = $faker->numberBetween(100, 1000);
        $pub->volume = $faker->numberBetween(1, 10);
        $pub->edition = $faker->numberBetween(1, 10);
        $pub->language = $faker->languageCode();
        $pub->country = $faker->country();
        $pub->city = $faker->city();
        $pub->views = $faker->numberBetween(0, 1000);
        $pub->downloads = $faker->numberBetween(0, 1000);
        $pub->likes = $faker->numberBetween(0, 1000);
        $pub->dislikes = $faker->numberBetween(0, 1000);
        $pub->comments = $faker->numberBetween(0, 1000);
        $pub->shares = $faker->numberBetween(0, 1000);
        $pub->save();
        echo $pub->id . ". $pub->title <br>";
    }
    //end time
    $end = microtime(true);
    //execution time
    $execution_time = ($end - $start);
    //in minutes
    $execution_time = ($execution_time / 60);
    echo '<b>Total Execution Time:</b> ' . $execution_time . ' Mins';
})->name('make-books');
