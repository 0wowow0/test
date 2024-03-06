<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
        <!-- Font -->
        <link href="https://font.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="content_title">
                    <h2>タイトル</h2>
                    <input type="text" name=post[title] placeholder="タイトル" value="{{ old('post.title') }}"/>
            </div>
            <div class="content_body">
                <h2>本文</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </body>
</html>