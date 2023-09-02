@extends('site.layouts.modelo')

@section('conteudo')
    <h1>Editar Produto</h1>

    <form action="{{ route('prod.salvarEdite', $prod->id) }}" method="post">
        @csrf
        @method('put')
        <label>Nome</label>
        <input type="text" name="nome" placeholder="Nome do produto" value="{{$prod->nome}}">
        <br><br>
        <label>Detalhes</label>
        <input type="text" name="detalhes" placeholder="Detalhes do produto" value="{{$prod->detalhes}}">
        <br><br>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
