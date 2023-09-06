@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Novo Produto</h1>
    <form method="POST" action="{{ route('produtos.store') }}">
        @csrf
        <div class="form-group">
            <label for="nome">Nome do Produto</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
            @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="number" class="form-control" id="preco" name="preco" step="0.01" required>
            @error('preco')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" required>
            @error('quantidade')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Salvar Produto</button>
    </form>
</div>
@endsection