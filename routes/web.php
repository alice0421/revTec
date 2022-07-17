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
Route::get('/', 'PostController@index'); //記事一覧
Route::get("/posts/create", "PostController@create"); //記事作成
Route::post("/posts", "PostController@store"); //記事作成後の投稿処理
Route::get("/posts/{post}", "PostController@show"); //記事詳細
Route::get("/posts/{post}/edit", "PostController@edit"); //記事編集
Route::post("/posts/{post}", "PostController@update"); //記事編集後の投稿処理

// viewのテスト用
/*
Route::get('/view', function () {
    return view('/posts/create');
});
*/