@extends('site.layouts.modelo')

@section('conteudo')
    <h2>Produto: {{ $prod->nome }}</h2>

    <ul>
        <li>Nome: {{ $prod->nome }}</li>
        <li>Detalhes: {{ $prod->detalhes }}</li>
        <li>Quantidade: {{ $prod->quantidade }}</li>
        <li>Fornecedor: {{ $prod->fornecedor }}</li>
    </ul>

    <a href="{{route('prod.index')}}">Voltar</a>
@endsection
