<!DOCTYPE html>
<html>
<head>
    <title>Редактирование профиля пользователя</title>
</head>
<body>
    <h1>Редактирование профиля пользователя</h1>
    <form method="POST" action="{{ route('admin.users.update', $user) }}">
        @csrf
        @method('PATCH')
        <label>Имя пользователя:</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
        <br>
        <label>Администратор:</label>
        <input type="checkbox" name="is_admin" @if(old('is_admin', $user->is_admin)) checked @endif>
        <br>
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>
