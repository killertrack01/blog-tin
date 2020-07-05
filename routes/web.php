<?php

use App\Category;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
// insert data
//Route::get('/','DataController@insertData')->name('home');
Route::get('/info', 'InfoController@info')->name('info');
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/', 'HomeController@insertData')->name('home');
//Route::get('admin/index', 'AdminController@index');
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('admin/index', 'AdminController@index')->name('admin');

    Route::get('admin/control-admin/list', 'AdminController@listAdmin');
    Route::delete('/delete-admin/{id}', 'AdminController@deleteAdmin');
    Route::get('admin/control-admin/create', 'AdminController@createAdmin')->name('addadmin');
    Route::get('admin/control-admin/edit', 'AdminController@editAdmin');

    Route::get('admin/feedback/list', 'FeedbackController@listFeedback');

    Route::get('admin/comment/list', 'CommentController@listCmt');

    Route::get('admin/userpost/list', 'UserPostController@listUPost');
    Route::get('admin/member/list', 'MemberController@listMem');
    Route::delete('/delete/{id}', 'MemberController@deleteMember');
    Route::get('/updateIF/{id}', 'InfoController@update')->name('update');
    Route::put('/user-updateIF/{id}', 'InfoController@updateuser');
});
Route::get('/contact', 'InfoController@contact')->name('contact');

Route::get('/postUser', 'InfoController@post')->name('post');
Route::get('/feedback', 'InfoController@feedback')->name('feedback');
Route::get('/about-us', 'AboutController@about');

//thêm cate
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'category'], function () {
        Route::get('list', 'CategoryController@listCate');

        Route::get('edit/{id}', 'CategoryController@editCate');
        Route::post('edit/{id}', 'CategoryController@postEditCate');

        Route::get('delete/{id}', 'CategoryController@cateDelete');

        Route::get('create', 'CategoryController@createCate');
        Route::post('create', 'CategoryController@postCate');
    });
});

//thêm xóa sửa post
Route::group(['prefix' => 'admin/post'], function () {

    //list post
    Route::get('list', 'PostController@listPost');

    //create post
    Route::get('create', 'PostController@createPost');
    Route::post('create', 'PostController@postCreatePost');

    //Edit post
    Route::get('edit/{id}', 'PostController@editPost');
    Route::post('edit/{id}','PostController@posteditPost');

    //delete post
    Route::get('delete/{id}','PostController@deletePost');
});
//cate detail
Route::get('layouts/layout-detail', function (){
     return view('layouts.layout-detail');
});

