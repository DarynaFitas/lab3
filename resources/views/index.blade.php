
<h1>Список безробітних пенсіонерів</h1>
<ul>
    @foreach($pensioners as $pensioner)
        <li>{{ $pensioner->name }} - {{ $pensioner->gender }} - {{ $pensioner->age }}</li>
    @endforeach
</ul>
