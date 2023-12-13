
<form method="POST" action="/pensioners/{{ $pensioner->id }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $pensioner->name }}"><br>
    <input type="text" name="gender" value="{{ $pensioner->gender }}"><br>
    <input type="number" name="age" value="{{ $pensioner->age }}"><br>

    <button type="submit">Оновити дані</button>
</form>
