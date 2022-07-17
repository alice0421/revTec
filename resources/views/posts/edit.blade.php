<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600"/>
        <title>Blog</title>
    </head>
    <body>
        <h1 class="title">Edit View</h1>
        <form action="/posts/{{ $post->id }}" method="post">
            @csrf
            <div class="title">
                <label for="title"><h2>Title</h2></label>
                <input type="text" id="title" name="post[title]" placeholder="タイトル" value="{{old("post.title")}}"/>
                <p class="title__error" style="color:red">{{$errors->first("post.title")}}</p>
            </div>
            <div class="body">
                <label for="body"><h2>Body</h2></label>
                <textarea id="body" name="post[body]" placeholder="今日も1日お疲れ様でした。">{{old("post.body")}}</textarea>
                <p class="body__error" style="color:red">{{$errors->first("post.body")}}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">
            [<a href="/">back</a>]
        </div>
    </body>
</html>