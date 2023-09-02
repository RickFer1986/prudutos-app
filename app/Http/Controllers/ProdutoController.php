<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalvarUpdateProduto;
use Illuminate\Http\Request;
use App\Models\produto;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class ProdutoController extends Controller
{
    public function index(){
        $prods = Produto::latest()->paginate(5);
        return view('site.index', compact('prods'));
    }

    public function add(){
        return view('site.produtos.add');
    }

    public function salvar(SalvarUpdateProduto $request){
        $prod = Produto::create($request->all());

        return redirect()
            ->route('prod.index')
            ->with('message', 'Produto Adicionado com sucesso!');
    }

    public function editar($id){
        // Condição: Se não existir o ID ele volta - [ back() ] - para atela inicial 
        if(!$prod = Produto::find($id))
        return redirect()->back();

        // Se existir o ID
        return view('site.produtos.editar', compact('prod'));
    }

    public function salvarEdite(SalvarUpdateProduto $request, $id){
        if(!$prod = Produto::find($id))
        return redirect()->back();
        // Se existir o ID

        $prod->update($request->all());
        
        return redirect()
            ->route('prod.index')
            ->with('message', 'Produto Editado com sucesso!');
    }

    public function exibir($id){
        // Primeiro modo
        //$prod = Produto::where('id', $id)->first();

        // Segundo modo (mais simples)
        $prod = Produto::find($id);
        
        // Realizando uma condição para verificação se o ID existe
        if(!$prod){
            return redirect()->route('prod.index');
        }

        return view('site.produtos.exibir', compact('prod'));


    }

    public function deletar($id){
        // Segundo modo (mais simples)
        $prod = Produto::find($id);
        
        // Realizando uma condição para verificação se o ID existe
        if(!$prod){
            return redirect()->route('prod.index');
        }

        // Deletando
        $prod->delete();

        return redirect()
            ->route('prod.index')
            ->with('message', 'Produto deletado com sucesso');
    }

    public function buscar(Request $request){
        // Preservando minhas buscas nas outras páginas exceto o Token: [ except('_token') ]
        $filters = $request->except('_token');
        // Buscando a palavra
        $prods = Produto::where('nome', 'LIKE', "%{$request->buscar}%")
            ->orWhere('detalhes', 'LIKE', "%{$request->buscar}%")
            ->paginate(5);

        return view('site.index', compact('prods', 'filters'));
    }
}
