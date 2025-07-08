<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿編集</title>
</head>
<body>
    <h1>投稿を編集</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>タイトル:</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}">

            @error('title')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>内容:</label>
            <textarea name="content">{{ old('content', $post->content) }}</textarea>

            @error('content')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>著者ID:</label>
            <input type="number" name="author_id" value="{{ old('author_id', $post->author_id) }}">

            @error('author_id')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">更新</button>
    </form>

    <a href="{{ route('posts.show', $post->id) }}">詳細に戻る</a>
</body>
</html>
