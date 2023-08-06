
<form method="POST" action="{{ route('data-request.submit') }}">
    @csrf
    <label>Имя заказчика:</label>
    <input type="text" name="customer_name" value="{{ old('customer_name') }}" required>
    @error('customer_name')
        <div>{{ $message }}</div>
    @enderror
    <br>
    <label>Номер телефона:</label>
    <input type="tel" name="phone_number" value="{{ old('phone_number') }}" required>
    @error('phone_number')
        <div>{{ $message }}</div>
    @enderror
    <br>
    <label>Email-адрес:</label>
    <input type="email" name="email" value="{{ old('email') }}" required>
    @error('email')
        <div>{{ $message }}</div>
    @enderror
    <br>
    <label>Информация о желаемых данных:</label>
    <textarea name="data_info" required>{{ old('data_info') }}</textarea>
    @error('data_info')
        <div>{{ $message }}</div>
    @enderror
    <br>
    <button type="submit">Отправить</button>
</form>
