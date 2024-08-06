<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all(); /* Método all vem do database */

        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Somente abre a pagina especificada na rota
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validação nas colunas tal, da tabela
        $request->validate(['nome' => 'required', 'preco' => 'required|numeric']);

        Produto::create($request->all());
        //Método vindo da classe do banco de dados
        return redirect()->route('produtos.index')->with('sucess', 'Produto criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('produtos.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('produtos.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required|numeric',
        ]);

        $produto->update($request->all());
        return redirect()->route('produtos.index')
            ->with('success', 'Produto atualizado com sucesso.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index')
                         ->with('success', 'Produto Deletado com Sucesso.');
    }
}

