@extends('site.layouts.modelo')

@section('conteudo')
    @foreach ($prods as $prod)
        <h1>Produto: </h1> {{ $prod->nome }}
        <p>Detalhes: {{ $prod->detalhes }}</p>
    @endforeach
@endsection
