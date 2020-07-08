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
Route::get('/','DataController@insertData')->name('home');
Route::get('/info', 'InfoController@info')->name('info');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('admin/index', 'AdminController@index');
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('admin/index', 'AdminController@index')->name('admin');

    Route::get('admin/control-admin/list', 'AdminController@listAdmin');
    //Route::delete('/delete-admin/{id}', 'AdminController@deleteAdmin');
    Route::put('/deletepersion-admin/{id}', 'AdminController@deletepersionAdmin');
    Route::get('admin/control-admin/create', 'AdminController@createAdmin');
    Route::put('admin/control-admin/create/{id}', 'AdminController@creAdmin');

    Route::get('admin/control-admin/edit', 'AdminController@editAdmin');

    Route::get('admin/feedback/list', 'FeedbackController@listFeedback');

    Route::get('admin/comment/list', 'CommentController@listCmt');

    //Admin duyệt post
    Route::get('admin/userpost/list', 'UserPostController@listUPost')->name('listuserpost');
    Route::post('admin/userpost/list', 'UserPostController@getListUPost')->name('getListUPost');

    Route::get('admin/userpost/detail/{id}', 'UserPostController@detail')->name('userpost');
    Route::get('userpost/update/{id}','UserPostController@updateStatus')->name('AdminUpdateStatus');

    Route::get('userpost/delete/{id}','UserPostController@deletePost')->name('AdmindeletePost');
    //

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

//config ckeditor
Route::post('plugins/ckeditor/image_upload','PostController@upload')->name('upload');

//cate detail list
Route::get('listcate/cate-detail/{id}','CategoryController@cateDetail');

//post detail
Route::get('listcate/detail/{id}','PostController@detail');
//search post
Route::post('listcate/search','PostController@search');

//User đăng bài
Route::get('/listpost','UserPostController@listpost')->name('listpost');
Route::post('/listpost','UserPostController@getListPost')->name('getList');

Route::get('/postUser','UserPostController@post')->name('post');
Route::post('/postUser','UserPostController@postCreate')->name('postCreate');

Route::get('/edit/{id}','UserPostController@edit')->name('edit');
Route::post('/edit/{id}','UserPostController@postEdit')->name('postEdit');

Route::get('/{tit}','UserPostController@getContent')->name('home.get.content');

Route::get('/delete/{id}','UserPostController@UserdeletePost')->name('deletePost');
Route::get('/detailupost/{id}', 'UserPostController@detailUPost')->name('userposted');
//

