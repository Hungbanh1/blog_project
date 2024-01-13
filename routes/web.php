<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('layouts.client.dashboard');
// });
Auth::routes();

//Client
Route::get('client', 'ClientController@show')->name('client');
Route::post('login-client', 'ClientController@login')->name('login-client');
Route::get('ui_register_client', 'ClientController@ui_register_client')->name('ui_register_client');
Route::post('RegisterClient', 'ClientController@RegisterClient')->name('RegisterClient');
Route::post('/logout_client', "ClientController@logout")->name('logout_client');
Route::get('/admin', 'AdminUserController@admin')->name('admin');
// Route::post('/login-admin', 'AdminUserController@login')->name('login-admin');
Route::middleware(['checkLogin'])->group(function () {
    Route::get('/dashboard', 'DashboardController@show');
    Route::get('/', 'UserController@dashboard')->name('dashboard_client');
    //comment
    Route::post('post_comment/{id_client}/{id_post}', 'CommentController@post_comment')->name('post_comment');


    //user
    Route::get('search/searchajax', 'SearchController@searchajax')->name('search_ajax');
    Route::get('search', 'SearchController@search')->name('search');

    // Route::get('sort/{search_filter}', 'SearchController@sort')->name('sort');
    Route::get('sort/{keyword}', 'SearchController@sort')->name('sort');


    Route::get("/trang-chu", "UserController@dashboard")->name('dashboard');
    Route::get("/detail_post/{id}", "UserController@detail_post")->name('detail_post');

    Route::get("/test/{id}", "UserController@test")->name('test');
    Route::get("/list", "UserController@list")->name('list');
    Route::get("/account/{id}", "UserController@account")->name('account');
    Route::post("/update_account_client/{id}", "UserController@update_account_client")->name('update_account_client');

    // Route::get("/danh-muc/{category-name}", "UserController@list")->name('list');
    Route::get("/danh_muc/{category_name}", "UserController@list")->name('danh_muc');

    // Route::get("/login", "UserController@login")->name('loginn');

    ///adnmin
    Route::get('/home', 'HomeController@index')->name('home');
    //author
    Route::Get('admin/author/add', 'AdminAuthorController@add')->name('author_add')->middleware('can:add_author');
    Route::Get('admin/author/list', 'AdminAuthorController@list')->name('author_list')->middleware('can:list_author');
    Route::get('admin/author/action', 'AdminAuthorController@action');

    Route::post('admin/author/store', 'AdminAuthorController@store')->name('author_store');
    Route::post('admin/author/update/{id}', 'AdminAuthorController@update')->name('update_author');

    Route::get('admin/author/edit/{id}', 'AdminAuthorController@edit')->name('edit_author')->middleware('can:update_author');

    Route::get('admin/author/delete/{id}', 'AdminAuthorController@delete')->name('delete_author')->middleware('can:delete_author');

    //Post



    // Route::Get('admin/post/add', 'AdminPostController@add')->middleware('can:post-add');
    // Route::Get('admin/post/list', 'AdminPostController@list')->middleware('can:post-list');

    Route::Get('admin/post/add', 'AdminPostController@add')->name('post_add')->middleware('can:add_post');
    Route::Get('admin/post/list', 'AdminPostController@list')->name('post_list')->middleware('can:list_post');
    Route::Get('admin/post/list/cat', 'AdminPostController@cat');

    Route::post('admin/post/store', 'AdminPostController@store')->name('post_store');

    Route::get('admin/post/delete/{id}', 'AdminPostController@delete')->name('delete_post')->middleware('can:delete_post');

    Route::get('admin/post/action', 'AdminPostController@action');




    Route::post('admin/post/update/{id}', 'AdminPostController@update')->name('update_post');

    Route::get('admin/post/edit/{id}', 'AdminPostController@edit')->name('edit_post')->middleware('can:update_post');

    Route::get('admin/post/page/detail/{id}', 'AdminPostController@detail')->name('detail_page_post');

    // ROle

    // route::get('admin/role/add', 'AdminRoleController@add')
    //     ->middleware('can:role-add');
    route::get('admin/role/add', 'AdminRoleController@add')->middleware('can:add_role');

    route::get('admin/role/list', 'AdminRoleController@list')->middleware('can:list_role');

    route::post('admin/role/action', 'AdminRoleController@action');

    route::get('admin/role/edit/{id}', 'AdminRoleController@edit')->name('edit_role')->middleware('can:edit_role');
    // ->middleware('can:role-edit');

    route::post('admin/role/update/{id}', 'AdminRoleController@update')->name('update_role');
    // ->middleware('can:role-update');


    //adminuser
    // Route::Get('admin/user/add', 'AdminUserController@add')->middleware('can:member-add');
    Route::Get('admin/user/add', 'AdminUserController@add');
    // Route::Get('admin/user/list', 'AdminUserController@list')->middleware('can:member-list');
    Route::Get('admin/user/list', 'AdminUserController@list');

    Route::Get('admin/user/test', 'AdminUserController@test');



    Route::post('admin/user/store', 'AdminUserController@store');

    Route::get('admin/user/delete/{id}', 'AdminUserController@delete')->name('delete_user');

    Route::get('admin/user/action', 'AdminUserController@action');



    Route::post('admin/user/update/{id}', 'AdminUserController@update')->name('update_user');

    Route::get('admin/user/update_pass/{id}', 'AdminUserController@update_pass')->name('update_pass');

    Route::post('admin/user/pass_have_update/{id}', 'AdminUserController@pass_have_update')->name('pass_have_update');

    Route::get('admin/user/update_account/{id}', 'AdminUserController@update_account')->name('update_account');

    Route::post('admin/user/account_have_update/{id}', 'AdminUserController@account_have_update')->name('account_have_update');




    Route::get('admin/user/detail/{id}', 'AdminUserController@detail')->name('detail_user');




    Route::get('admin/user/edit/{id}', 'AdminUserController@edit')->name('edit_user');
});


// Route::group(['prefix' => 'laravel-filemanager'], function () {
//  \UniSharp\LaravelFilemanager\Lfm::routes();
// });
