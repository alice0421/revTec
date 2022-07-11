<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post; /* Postモデルクラスの定義 */

class PostController extends Controller{
    public function index(Post $post){
        return view("posts/index")->with(["posts" => $post->get()]);
    }
}
