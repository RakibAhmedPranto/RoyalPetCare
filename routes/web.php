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
Route::get('/admin', 'AdminPagesController@admin_index')->name('adminIndex');
Route::get('/admin/about', 'AdminPagesController@admin_about')->name('adminAbout');
Route::get('/admin/landingpage', 'AdminPagesController@admin_landingpage')->name('adminLandingpage');
Route::get('/admin/submenu', 'AdminPagesController@admin_submenu')->name('adminSubmenu');
Route::get('/admin/addmenu', 'AdminPagesController@admin_addmenu')->name('adminAddmenu');
Route::get('/admin/features/addnewfeatures', 'AdminPagesController@admin_addfeatures')->name('adminAddnewFeatures');
Route::get('/admin/blog/createblog', 'AdminPagesController@admin_createblog')->name('adminCreateBlog');
Route::get('/admin/blog/manageblog', 'AdminPagesController@admin_manageblog')->name('adminManageBlog');
Route::post('/','AdminPagesController@blog_store')->name('admin.blog.store');
//Route::get('/admin/register', 'AdminPagesController@admin_register')->name('adminRegister');
