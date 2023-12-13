
<form method="POST" action="/pensioners">
    @csrf

    <input type="text" name="name" placeholder="Ім'я"><br>
    <input type="text" name="gendre" placeholder="Стать"><br>
    <input type="number" name="age" placeholder="Вік"><br>

    <button type="submit">Додати пенсіонера</button>
</form>
