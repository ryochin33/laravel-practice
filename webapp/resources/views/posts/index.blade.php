<!-- resources/views/posts/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>投稿一覧</title>
</head>
<body>
    <h1>投稿一覧</h1>

    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <p>投稿者ID: {{ $post->author_id }}</p>

            <a href="{{ route('posts.show', $post->id) }}">編集</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button>
        </form>
        </div>
    @endforeach
</body>
</html>
