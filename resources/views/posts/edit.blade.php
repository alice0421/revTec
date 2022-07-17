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
            @method('PUT')
            <div class="content__title">
                <label for="title"><h2>Title</h2></label>
                <input type="text" id="title" name="post[title]" value="{{ $post->title }}"/>
            </div>
            <div class="content__body">
                <label for="body"><h2>Body</h2></label>
                <textarea id="body" name="post[body]">{{ $post->body }}</textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">
            [<a href="/posts/{{ $post->id }}">back</a>]
        </div>
    </body>
</html>