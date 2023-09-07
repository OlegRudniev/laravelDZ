<!DOCTYPE html>
<html>
<head>
    <title>Создать новость</title>
</head>
<body>
    <h1>Создать новость</h1>

    @if ($errors->any())
        <div>
            <strong>Ошибки:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('news.store') }}">
        @csrf
        <label for="title">Заголовок:</label>
        <input type="text" id="title" name="title" required><br><br>
        <label for="content">Содержание:</label><br>
        <textarea id="content" name="content" rows="4" required></textarea><br><br>
        <button type="submit">Сохранить новость</button>
    </form>
</body>
</html>
