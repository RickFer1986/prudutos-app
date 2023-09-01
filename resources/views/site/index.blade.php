@extends('site.layouts.modelo')

@section('conteudo')
    <h1>Home dos produtos</h1>
    <hr>
    <a href="{{route('prod.add')}}">Adicionar</a>
    <a href="{{route('prod.exibir')}}">Exibir</a>
    <hr>
    <h1>Produtos</h1>
    @foreach ($prods as $prod)
        <ul>
            <a href="{{route('prod.exibir')}}"><li>{{$prod->nome}}</li><i class="bi bi-eye"></i></a>
        </ul>
    @endforeach
@endsection