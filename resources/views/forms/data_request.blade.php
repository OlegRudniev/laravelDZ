<!DOCTYPE html>
<html>
<head>
    <title>Форма заказа данных</title>
</head>
<body>
    <h1>Форма заказа данных</h1>
    <form method="POST" action="{{ route('data-request.submit') }}">
        @csrf
        <label>Имя заказчика:</label>
        <input type="text" name="customer_name" required>
        <br>
        <label>Номер телефона:</label>
        <input type="tel" name="phone_number" required>
        <br>
        <label>Email-адрес:</label>
        <input type="email" name="email" required>
        <br>
        <label>Информация о желаемых данных:</label>
        <textarea name="data_info" required></textarea>
        <br>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>
