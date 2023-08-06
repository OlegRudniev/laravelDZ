<form action="{{ route('feedback.destroy', $feedback) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Удалить</button>
</form>
