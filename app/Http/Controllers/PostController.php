<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post; /* Postモデルクラスの定義 */

class PostController extends Controller{
    //記事一覧
    public function index(Post $post){
        return view("posts/index")->with(["posts" => $post->getPaginateByLimit()]);
    }
    
    //記事詳細
    public function show(Post $post){
        //dd($post);
        return view("posts/show")->with(["post" => $post]);
    }
}