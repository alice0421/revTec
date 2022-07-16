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

/* /postにGETリクエストが来たらPostControllerのindexメソッドを実行 */
Route::get('/', 'PostController@index');
Route::get("/posts/create", "PostController@create");
Route::get("/posts/{post}", "PostController@show");
Route::post("/posts", "PostController@store");


// viewのテスト用
/*
Route::get('/view', function () {
    return view('/posts/create');
});
*/