<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalvarUpdateProduto;
use Illuminate\Http\Request;
use App\Models\produto;

class ProdutoController extends Controller
{
    public function index(){
        $prods = Produto::all();
        return view('site.index', compact('prods'));
    }

    public function add(){
        return view('site.produtos.add');
    }

    public function salvar(SalvarUpdateProduto $request){
        $prod = Produto::create($request->all());

        return redirect()->route('prod.index');
    }

    public function editar(){
        
        return 'Editar';
    }

    public function exibir(){
        $prods = Produto::all();

        return view('site.produtos.exibir', compact('prods'));
    }

    public function deletar(){
        return 'Deletar';
    }
}
