<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿編集</title>
</head>
<body>
    <h1>投稿を編集</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>タイトル:</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}">
        </div>

        <div>
            <label>内容:</label>
            <textarea name="content">{{ old('content', $post->content) }}</textarea>
        </div>

        <div>
            <label>著者ID:</label>
            <input type="number" name="author_id" value="{{ old('author_id', $post->author_id) }}">
        </div>

        <button type="submit">更新</button>
    </form>

    <a href="{{ route('posts.show', $post->id) }}">詳細に戻る</a>
</body>
</html>
