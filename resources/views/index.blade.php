@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Produtos</h1>
    <table class="table" id="tabela-produtos">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->preco }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>
                        <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-info">Detalhes</a>
                        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning">Editar</a>
                        <form method="POST" action="{{ route('produtos.destroy', $produto->id) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza de que deseja excluir este produto?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('produtos.create') }}" class="btn btn-success">Criar Novo Produto</a>
</div>
@endsection
