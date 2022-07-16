<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post; /* Postモデルクラスの定義 */
use App\Http\Requests\PostRequest; /* PostRequestモデルクラスの定義 */

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
    
    //記事作成
    public function create(){
        return view("posts/create");
    }
    
    //記事投稿(DBへの保存)
    public function store(PostRequest $request, Post $post){
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}