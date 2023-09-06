<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('index', compact('produtos'));
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('show', compact('produto'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Validação simples para preço e quantidade com mensagens de erro.
        // O método validate() retorna um array com as mensagens de erro.
        // Se não houver erros, o array estará vazio.
        $request->validate([
            'nome' => 'required',
            'preco' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:0',
        ], [
            'nome.required' => 'O nome do produto é obrigatório.',
            'preco.required' => 'O preço do produto é obrigatório.',
            'preco.numeric' => 'O preço do produto deve ser um número.',
            'preco.min' => 'O preço do produto não pode ser negativo.',
            'quantidade.required' => 'A quantidade do produto é obrigatória.',
            'quantidade.integer' => 'A quantidade do produto deve ser um número inteiro.',
            'quantidade.min' => 'A quantidade do produto não pode ser negativa.',
        ]);




        $produto = new Produto($request->all());
        $produto->save();
        return redirect()->route('produtos.index');
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('edit', compact('produto'));
    }

    public function update(Request $request, $id)
    {
        // Validação simples para preço e quantidade com mensagens de erro.
        // O método validate() retorna um array com as mensagens de erro.
        // Se não houver erros, o array estará vazio.
        $request->validate([
            'nome' => 'required',
            'preco' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:0',
        ], [
            'nome.required' => 'O nome do produto é obrigatório.',
            'preco.required' => 'O preço do produto é obrigatório.',
            'preco.numeric' => 'O preço do produto deve ser um número.',
            'preco.min' => 'O preço do produto não pode ser negativo.',
            'quantidade.required' => 'A quantidade do produto é obrigatória.',
            'quantidade.integer' => 'A quantidade do produto deve ser um número inteiro.',
            'quantidade.min' => 'A quantidade do produto não pode ser negativa.',
        ]);

        $produto = Produto::findOrFail($id);
        $produto->update($request->all());
        return redirect()->route('index');
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->route('index');
    }

    public function buscarPorNome(Request $request)
    {
        $query = $request->input('query');

        // Faça a pesquisa no banco de dados por produtos cujo nome contenha a consulta
        $produtos = Produto::where('nome', 'like', '%' . $query . '%')->get();

        // Retorne os resultados da pesquisa em formato JSON
        return response()->json($produtos);
    }

    public function pesquisa()
    {
        return view('pesquisa');
    }
}
