
<form method="POST" action="{{ route('feedback.submit') }}">
    @csrf
    <label>Имя пользователя:</label>
    <input type="text" name="username" value="{{ old('username') }}" required>
    @error('username')
        <div>{{ $message }}</div>
    @enderror
    <br>
    <label>Комментарий / отзыв:</label>
    <textarea name="comment" required>{{ old('comment') }}</textarea>
    @error('comment')
        <div>{{ $message }}</div>
    @enderror
    <br>
    <button type="submit">Отправить</button>
</form>

