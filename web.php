<?php

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
    return view('welcome');
});

Route::get('/profile/profil.php', function () {
    return view('profil');
});

Route::get('/about', function () {
    $nama= 'Radif Dahlin Rahmana';
    return view('about',['nama' => $nama]);
});

Route::get('/profile/profil.php', function () {
    return view('profil');
});

Route::get('/swiper/3D.html', function () {
    return view('picture');
});

Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');

Route::get('/member/index','MemberController@index');


Route::get('/students','StudentsController@index');
Route::get('/students/create','StudentsController@create');
Route::get('/students/{students}','StudentsController@show');
Route::post('/students','StudentsController@store');
route::delete('/students/{students}','StudentsController@destroy');
route::get('/students/{students}/edit','StudentsController@edit');
route::patch('/students/{students}','StudentsController@update');


