<!DOCTYPE html>
<html>
<head>
    <title>Форма обратной связи</title>
</head>
<body>
    <h1>Форма обратной связи</h1>
    <form method="POST" action="{{ route('feedback.submit') }}">
        @csrf
        <label>Имя пользователя:</label>
        <input type="text" name="username" required>
        <br>
        <label>Комментарий / отзыв:</label>
        <textarea name="comment" required></textarea>
        <br>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>
