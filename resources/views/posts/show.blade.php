<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600"/>
        <link rel="stylesheet" href="/css/app.css"> <!-- 作った覚えないぞ…？ -->
        <title>Blog</title>
    </head>
    <body>
        <h1 class="title">{{ $post->title }}</h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p class="body">{{ $post->body }}</p>
                <p class="updated_at" style="font-size: 10px">{{ $post->updated_at }}</p>
            </div>
        </div>
        <div class="fotter">
            <a href="/">back</a>
        </div>
    </body>
</html>