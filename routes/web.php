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
//===================User home======================
Route::get('/', 'User\UserHomeController@index');

//===================Product========================
Route::get('product', 'User\ProductController@index');
Route::get('product/cat/{id}', 'User\ProductController@product_cat');
Route::get('product/show', 'User\ProductController@all_product');
//===================Product========================

//===================Blog========================
Route::get('blog', 'User\BlogController@index');
Route::get('blog/cat/{id}', 'User\BlogController@blog_cat');
Route::get('blog/show', 'User\BlogController@all_blog');
//===================Blog========================

//===================Single Product=================
Route::get('product/single', 'User\UserHomeController@single_product');
//===================Single Product=================

//===================Single blog=================
Route::get('blog/details', 'User\UserHomeController@blog_details');
//===================Single blog=================

Route::group(['middleware' => 'auth'], function () {
    //===================User Profile====================
    Route::get('userprofile', 'User\UserProfileController@index');
    Route::post('profile/update', 'User\UserProfileController@update');
    Route::post('accessory/save', 'User\UserProfileController@save_accessories');
    Route::post('accessory/edit', 'User\UserProfileController@edit_product');
	Route::get('accessory/del/{id}', 'User\UserProfileController@del');
    Route::post('blog/store','User\UserProfileController@store_blog');
	Route::get('bloguser/del/{id}', 'User\UserProfileController@del_blog');
    //===================User Profile====================

    //=================User Comment======================
    Route::post('product_comment/save', 'User\ProductCommentController@save');
    Route::post('blog_comment/save', 'User\BlogCommentController@save');
    //=================User Comment======================

    //==================Admin============================
    Route::group(['middleware' => ['admin']], function () {

        //===================Admin======================
        Route::get('admin', 'MainController@index');
        //===================/Admin=====================

    //Product Category
    Route::get('procat/lists', 'Product\ProductCategoryController@index');
    Route::post('procat/save', 'Product\ProductCategoryController@save');
    Route::post('procat/edit', 'Product\ProductCategoryController@edit');
    Route::get('procat/del/{id}', 'Product\ProductCategoryController@del');
    //Product Category

    //Blog Category
    Route::get('blogcat/lists', 'Blog\BlogCategoryController@index');
    Route::post('blogcat/save', 'Blog\BlogCategoryController@save');
    Route::post('blogcat/edit', 'Blog\BlogCategoryController@edit');
    Route::get('blogcat/del/{id}', 'Blog\BlogCategoryController@del');
    
    //Blog Category

    //Blog
    Route::get('blog/lists', 'Blog\BlogController@index');
    Route::post('blog/save', 'Blog\BlogController@save');
    Route::post('blog/edit', 'Blog\BlogController@edit');
    Route::get('blog/del/{id}', 'Blog\BlogController@del');
    //Blog

    //department
    Route::get('dept/lists', 'Department\DepartmentController@index');
    Route::post('dept/save', 'Department\DepartmentController@save');
    Route::post('dept/edit', 'Department\DepartmentController@edit');
    Route::get('dept/del/{id}', 'Department\DepartmentController@del');
    //department

    //product
    Route::get('product/lists', 'Product\ProductController@index');
    Route::post('product/save', 'Product\ProductController@save');
    Route::post('product/edit', 'Product\ProductController@edit');
    Route::get('product/approve', 'Product\ProductController@accept');
    Route::get('product/del/{id}', 'Product\ProductController@del');
    //product

    });
});
Route::get('logout', 'LogOutController@index');
Auth::routes();
