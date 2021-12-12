<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Frontend Website Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\Frontend\PagesController@index')-> name('home');
Route::get('/courses', 'App\Http\Controllers\Frontend\PagesController@course')-> name('allcourse');


/*
|--------------------------------------------------------------------------
| Backend Admin panel Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([ 'prefix' => 'admin' ], function()
{
    route::get('/dashboard', 'App\Http\Controllers\Backend\DashboardController@dashboard')-> name('admin.dashboard');
    
    //This Route For Branch Management//
    Route::group([ 'prefix' => '/branch' ], function()
    {
        Route::get('/manage', 'App\Http\Controllers\Backend\BranchController@index')-> name('branch.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\BranchController@create')-> name('branch.create');
        Route::post('/store', 'App\Http\Controllers\Backend\BranchController@store')-> name('branch.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\BranchController@edit')-> name('branch.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\BranchController@update')-> name('branch.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\BranchController@destroy')-> name('branch.destroy');
    });

    //This Route For Course Management//
    Route::group([ 'prefix' => '/course' ], function()
    {
        Route::get('/manage', 'App\Http\Controllers\Backend\CourseController@index')-> name('course.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\CourseController@create')-> name('course.create');
        Route::post('/store', 'App\Http\Controllers\Backend\CourseController@store')-> name('course.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\CourseController@edit')-> name('course.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\CourseController@update')-> name('course.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\CourseController@destroy')-> name('course.destroy');
    });

    //This Route For Course Curriculam Management//
    Route::group([ 'prefix' => '/curriculam' ], function()
    {
        Route::get('/manage', 'App\Http\Controllers\Backend\CourseCurriculamController@index')-> name('curriculam.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\CourseCurriculamController@create')-> name('curriculam.create');
        Route::post('/store', 'App\Http\Controllers\Backend\CourseCurriculamController@store')-> name('curriculam.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\CourseCurriculamController@edit')-> name('curriculam.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\CourseCurriculamController@update')-> name('curriculam.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\CourseCurriculamController@destroy')-> name('curriculam.destroy');
    });

    //This Route For Coupon Management//
    Route::group([ 'prefix' => '/coupon' ], function()
    {
        Route::get('/manage', 'App\Http\Controllers\Backend\CouponController@index')-> name('coupon.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\CouponController@create')-> name('coupon.create');
        Route::post('/store', 'App\Http\Controllers\Backend\CouponController@store')-> name('coupon.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\CouponController@edit')-> name('coupon.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\CouponController@update')-> name('coupon.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\CouponController@destroy')-> name('coupon.destroy');
    });

    //This Route For Batch Management//
    Route::group([ 'prefix' => '/batch' ], function()
    {
        Route::get('/manage', 'App\Http\Controllers\Backend\BatchController@index')-> name('batch.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\BatchController@create')-> name('batch.create');
        Route::post('/store', 'App\Http\Controllers\Backend\BatchController@store')-> name('batch.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\BatchController@edit')-> name('batch.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\BatchController@update')-> name('batch.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\BatchController@destroy')-> name('batch.destroy');
    });

    //This Route For Mentor Profile Management//
    Route::group([ 'prefix' => '/mentor' ], function()
    {
        Route::get('/manage', 'App\Http\Controllers\Backend\MentorController@index')-> name('mentor.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\MentorController@create')-> name('mentor.create');
        Route::post('/store', 'App\Http\Controllers\Backend\MentorController@store')-> name('mentor.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\MentorController@edit')-> name('mentor.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\MentorController@update')-> name('mentor.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\MentorController@destroy')-> name('mentor.destroy');
    });
});