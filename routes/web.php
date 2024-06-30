<?php
namespace App\Models;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
//use App\Models\Student;
//use App\Models\Person;

Route::get('/', function () {
    //return "Hello world";
    //dd(Person::all());
    return view("home",["students" => Student::with('person')->paginate(5)]);
    //return view("home",["students" => Student::with('person')->cursorPaginate(5)]);
    //return view("home",["students" => Student::with('person')->simplePaginate(5)]);
    //return view('welcome');
});
Route::resource('member',MemberController::class);




// Route::controller(MemberController::class)->group(function(){
//     Route::get('/member/deleteall','deleteAll');
//     Route::get('/','index');
//     Route::get('/member','index');
//     Route::get('/member/create','create');
//     Route::post('/member','store');
//     Route::get('/member/{member}','show');
//     Route::get('/member/{member}/edit','edit');
//     Route::patch('/member/{member}','update');
//     Route::delete('/member/{member}','destroy');

// });




Route::get('/test', function () {
    //return "Hello world";
    return view("test", [
        "hello" => "Hellooooowooeoeoeooe"
    ]);
    //return view('welcome');
});

