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

Route::get('/', function () {
    return view('index');
});
Route::get('/info', 'InfoController@info')->name('info');
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

Route::get('admin/feedback/list', 'FeedbackController@listFeedback');

Route::get('admin/comment/list', 'CommentController@listCmt');
//Admin duyệt post
Route::get('admin/userpost/list', 'UserPostController@listUPost')->name('listuserpost');

Route::get('admin/userpost/detail/{id}', 'UserPostController@detail')->name('userpost');
Route::get('userpost/update/{id}','UserPostController@updateStatus')->name('AdminUpdateStatus');

Route::get('userpost/delete/{id}','UserPostController@deletePost')->name('AdmindeletePost');
//
Route::get('admin/member/list', 'MemberController@listMem');
Route::delete('/delete/{id}','MemberController@deleteMember');
Route::get('/updateIF/{id}','InfoController@update')->name('update');
Route::put('/user-updateIF/{id}','InfoController@updateuser');
});
Route::get('/contact', 'InfoController@contact')->name('contact');
//User đăng bài
Route::get('/listpost','InfoController@listpost')->name('listpost');
Route::post('/listpost','InfoController@getListPost')->name('getList');

Route::get('/postUser','InfoController@post')->name('post');
Route::post('/postUser','InfoController@postCreate')->name('postCreate');

Route::get('/edit/{id}','InfoController@edit')->name('edit');
Route::post('/edit/{id}','InfoController@postEdit')->name('postEdit');

Route::get('/delete/{id}','InfoController@deletePost')->name('deletePost');
//
Route::get('/feedback', 'InfoController@feedback')->name('feedback');
Route::get('/about-us', 'AboutController@about');

//thêm cate
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'category'], function () {
        Route::get('list', 'CategoryController@listCate');

        Route::get('edit/{id}', 'CategoryController@editCate');
        Route::post('edit/{id}','CategoryController@postEditCate');

        Route::get('delete/{id}','CategoryController@cateDelete');

        Route::get('create', 'CategoryController@createCate');
        Route::post('create', 'CategoryController@postCate');
    });
});

//thêm xóa sửa post
Route::group(['prefix'=>'admin/post'],function(){
   
   //list post
    Route::get('list','PostController@listPost');

    //create post
    Route::get('create','PostController@createPost');
    Route::post('create','PostController@postCreatePost');

    Route::get('edit','PostController@deletePost');
});