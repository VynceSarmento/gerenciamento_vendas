<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Produtos::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = $request->all();

        Produtos::create($produto);

        return redirect()->route('produtos.index')->with('message', 'Produtos cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function show(Produtos $produtos)
    {
        return $produtos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function edit(Produtos $produtos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produtos $produtos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produtos $produtos)
    {
        //
    }
}
