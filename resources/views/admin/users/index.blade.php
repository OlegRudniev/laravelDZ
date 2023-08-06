<!DOCTYPE html>
<html>
<head>
    <title>Админка - Пользователи</title>
</head>
<body>
    <h1>Пользователи</h1>
    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }}
                @if ($user->is_admin)
                    (Администратор)
                @endif
                <a href="{{ route('admin.users.edit', $user) }}">Редактировать</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
