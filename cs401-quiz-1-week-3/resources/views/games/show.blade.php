<!DOCTYPE html>
<html>
<head>
    <title>Game Details</title>
</head>
<body>
    <h1>{{ $game['title'] }}</h1>
    <p><strong>Genre:</strong> {{ $game['genre'] }}</p>
    <p><strong>ID:</strong> {{ $game['id'] }}</p>

    <a href="/games">← Back to list</a>
</body>
</html>
