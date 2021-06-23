<!DOCKTYPE HTML>
<html lang ="{{ str_replace('_','-', app()->getLocale()) }}">
    <head>
        <meta haraset ="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
        　　<div class='content__title'>
        　　  <h2>Title</h2>
        　　    <input type="text" name="post[title]" value="{{ $post->title }}">
        　　</div>
            <div class="content__body">
        　　  <h2>Body</h2>
        　　  <input type='text' name='post[body]' value="{{ $post->body }}">
        　　</div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/posts/{{ $post->id }}">back</a>]</div>
    </body>
</html>