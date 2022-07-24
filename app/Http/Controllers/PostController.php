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
    
    //記事"作成"後の投稿処理(DBへの保存)
    public function store(PostRequest $request, Post $post){
        $input = $request['post'];
        // $post->fill($input)->save();
        \DB::enableQueryLog();
        $post->fill($input)->save();
        dd(\DB::getQueryLog());
        return redirect('/posts/' . $post->id);
    }
    
    //記事編集
    public function edit(Post $post){
        return view("posts/edit")->with(["post" => $post]);
    }
    
    //記事"編集"後の投稿処理(DBへの保存)
    public function update(PostRequest $request, Post $post){
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
    
    //記事削除
    public function delete(Post $post){
        $post->delete(); //論理削除(deleted_at)
        return redirect('/');
    }
}