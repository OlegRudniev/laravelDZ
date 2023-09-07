<form method="POST" action="{{ route('resources.store') }}">
    @csrf
    <label for="name">Название ресурса:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="url">URL ресурса:</label>
    <input type="url" id="url" name="url" required><br><br>
    <button type="submit">Сохранить ресурс</button>
</form>
