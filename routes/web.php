<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Lesson;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/students', function () {
	$students = Student::get();
	$lessons = Lesson::get();
	// dd($lessons);
    return view('students')->with(['students'=> $students, 'lessons'=>$lessons]);
})->name('students');


Route::get('/students/{lesson_id}', function ($lesson_id) {
	
	$students = Student::where('lesson_id', $lesson_id)->get();
	$lesson_name = Student::where('lesson_id', $lesson_id)->first();
	$lessons = Lesson::get();
    return view('lesson')->with(['students'=> $students, 'lesson_name'=>$lesson_name, 'lessons'=>$lessons]);
});

Route::get('/lessons', function () {
	$lessons = Lesson::get();
    return view('lesson-list')->with('lessons',$lessons);
});

Route::get('{page}/{subs?}', ['uses' => '\App\Http\Controllers\PageController@index'])
    ->where(['page' => '^(((?=(?!admin))(?=(?!\/)).))*$', 'subs' => '.*']);