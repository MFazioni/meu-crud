<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Listar todos os produtos
    public function index() {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    // Criar produto
public function store(Request $request) {
    $request->validate([
        'name'           => 'required|string',
        'description'    => 'nullable|string',
        'price'          => 'required|numeric',
        'status'         => 'required|in:em estoque,em reposição,em falta',
        'stock_quantity' => 'required|numeric',
    ]);

    $produto = Produto::create($request->all());
    return response()->json($produto, 201);
}

    // Exibir um produto
    public function show($id) {
        $produto = Produto::find($id);
        return response()->json($produto);
    }

    // Atualizar produto
public function update(Request $request, $id) {
    $request->validate([
        'name'           => 'required|string',
        'description'    => 'nullable|string',
        'price'          => 'required|numeric',
        'status'         => 'required|in:em estoque,em reposição,em falta',
        'stock_quantity' => 'required|numeric',
    ]);

    $produto = Produto::find($id);
    $produto->update($request->all());
    return response()->json($produto);
}

    // Deletar produto
    public function destroy($id) {
        Produto::destroy($id);
        return response()->json(['mensagem' => 'Produto deletado!']);
    }
}