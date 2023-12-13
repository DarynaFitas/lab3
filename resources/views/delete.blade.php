
<form method="POST" action="/pensioners/{{ $pensioner->id }}">
    @csrf
    @method('DELETE')

    <p>Ви впевнені, що хочете видалити пенсіонера {{ $pensioner->name }}?</p>

    <button type="submit">Так, видалити</button>
</form>
