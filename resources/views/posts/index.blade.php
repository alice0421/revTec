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
        <h1>Blog Name</h1>
        <p class="create">
            [<a href="/posts/create">create</a>]
        </p>
        
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <h2 class="title">
                        <button type="button" id="form_{{ $post->id }}">button</button>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        <form action="/posts/{{ $post->id }}" method="post" style="display:inline" onsubmit="return checkDelete()">
                            @csrf
                            @method("DELETE")
                            <button type="submit">delete</button>
                        </form>
                    </h2>
                    <p class="body">{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        
        <script>
            function btnClick(){
                alert("Hi!");
            }
            id = document.getElementById("form_"+{{ $post->id }});
            id.addEventListener("click", btnClick());
            
            /* deleteボタン押下時のポップアップ実装 */
            function checkDelete(){
                if(window.confirm("記事を削除すると復元できません。\n本当に削除しますか？")){
                    return true; /* 送信を開始 */
                }else{
                    return false; /* 送信を取り消し */
                }
            }
        </script>
    </body>
</html>
