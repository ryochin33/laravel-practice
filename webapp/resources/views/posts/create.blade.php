<!DOCTYPE html>
<html>
<head>
    <title>新規投稿</title>
</head>
<body>
    <h1>新規投稿フォーム</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>タイトル:</label><br>
        <input type="text" name="title"><br><br>

        <label>本文:</label><br>
        <textarea name="content"></textarea><br><br>

        <label>投稿者ID:</label><br>
        <input type="number" name="author_id"><br><br>

        <button type="submit">投稿する</button>
    </form>
</body>
</html>
