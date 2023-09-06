@extends('layouts.app')

@section('content')
<form action="{{ route('produtos.buscar') }}" method="GET">
    <input type="text" name="query" placeholder="Pesquisar por nome">
    <button type="submit">Pesquisar</button>
</form>
@endsection