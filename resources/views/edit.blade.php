@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Produto - {{ $produto->nome }}</h1>
    <form method="POST" action="{{ route('produtos.update', $produto->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome do Produto</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $produto->nome }}" required>
            @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="4">{{ $produto->descricao }}</textarea>
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="number" class="form-control" id="preco" name="preco" value="{{ $produto->preco }}" step="0.01" required>
            @error('preco')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{ $produto->quantidade }}" required>
            @error('quantidade')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Produto</button>
    </form>
</div>
@endsection