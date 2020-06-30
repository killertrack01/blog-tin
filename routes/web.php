<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/info','InfoController@info') -> name('info');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('admin/index', 'AdminController@index');
Route::group(['middleware' => ['auth','admin']], function()
{
Route::get('admin/index', 'AdminController@index')->name('admin');

Route::get('admin/control-admin/list', 'AdminController@listAdmin');
Route::delete('/delete-admin/{id}','AdminController@deleteAdmin');
Route::get('admin/control-admin/create', 'AdminController@createAdmin');
Route::get('admin/control-admin/edit', 'AdminController@editAdmin');

Route::get('admin/post/create', 'PostController@create');
Route::get('admin/post/list', 'PostController@list');
Route::get('admin/post/edit', 'PostController@getEdit');
Route::get('admin/category/list', 'CategoryController@listCate');
Route::get('admin/category/create', 'CategoryController@createCate');
Route::get('admin/category/edit', 'CategoryController@editCate');

Route::get('admin/feedback/list', 'FeedbackController@listFeedback');

Route::get('admin/comment/list', 'CommentController@listCmt');

Route::get('admin/userpost/list', 'UserPostController@listUPost');
Route::get('admin/member/list', 'MemberController@listMem');
Route::delete('/delete/{id}','MemberController@deleteMember');
Route::get('/updateIF/{id}','InfoController@update')->name('update');
Route::put('/user-updateIF/{id}','InfoController@updateuser');
});
Route::get('/contact','InfoController@contact')->name('contact');

Route::get('/postUser','InfoController@post')->name('post');
Route::get('/feedback','InfoController@feedback')->name('feedback');
Route::get('/about-us','AboutController@about');