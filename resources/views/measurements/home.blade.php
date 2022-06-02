@extends('./layouts/main')

@section('container')
    <h1>Home</h1>
    <ul>
        <li><a href="/measurements">Medidas cadastradas</a>
        <li><a href="/measurements/new">Nova medida</a>
    </ul>
@endsection
