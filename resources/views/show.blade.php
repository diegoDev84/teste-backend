@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Produto - {{ $produto->nome }}</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $produto->id }}</td>
        </tr>
        <tr>
            <th>Nome</th>
            <td>{{ $produto->nome }}</td>
        </tr>
        <tr>
            <th>Descrição</th>
            <td>{{ $produto->descricao }}</td>
        </tr>
        <tr>
            <th>Preço</th>
            <td>{{ $produto->preco }}</td>
        </tr>
        <tr>
            <th>Quantidade</th>
            <td>{{ $produto->quantidade }}</td>
        </tr>
    </table>
    <a href="{{ route('produtos.index') }}" class="btn btn-primary">Voltar para a Lista de Produtos</a>
</div>
@endsection
