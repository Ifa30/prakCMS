<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
    <h1>{{ $article['title'] }}</h1>
    <p>{{ $article['content'] }}</p>

    <a href="{{ url('/articles/' . $article['id'] . '/edit') }}">✏ Edit</a> |
    <a href="{{ url('/articles/' . $article['id'] . '/delete') }}">🗑 Hapus</a>
    <br><br>
    <a href="{{ url('/articles') }}">← Kembali ke daftar</a>
</body>
</html>