@extends('site.layouts.modelo')

@section('conteudo')
    <h1>Adicionar Produto</h1>

    <form action="{{ route('prod.salvar') }}" method="post">
        @csrf
        <label for="">Nome</label>
        <input type="text" name="nome" placeholder="Nome do produto" value="{{old('nome')}}">
        <br><br>
        <label for="">Detalhes</label>
        <input type="text" name="detalhes" placeholder="Detalhes do produto" value="{{old('detalhes')}}">
        <br><br>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
@endsection
