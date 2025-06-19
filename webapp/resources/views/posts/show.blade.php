<!-- resources/views/posts/show.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿詳細</title>
</head>
<body>
    <h1>投稿の詳細</h1>

    <p><strong>タイトル：</strong> {{ $post->title }}</p>
    <p><strong>内容：</strong> {{ $post->content }}</p>
    <p><strong>投稿者ID：</strong> {{ $post->author_id }}</p>

    <a href="{{ route('posts.edit', $post->id) }}">編集</a> |
    <a href="{{ route('posts.index') }}">一覧に戻る</a>
</body>
</html>
