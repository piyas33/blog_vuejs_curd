<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('get_blog','ApiController@getBlog')->name('get_blog');
Route::post('store_blog','ApiController@storeBlog')->name('store_blog');
Route::get('edit_blog/{id}','ApiController@editBlog')->name('edit_blog');
Route::post('update_blog/{id}','ApiController@updateBlog')->name('update_blog');
Route::delete('delete_blog/{id}', 'ApiController@deleteBlog');
