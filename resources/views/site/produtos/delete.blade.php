@extends('site.layouts.modelo')

@section('conteudo')
    <h1>Deletar produto: </h1>

    <form action="{{ route('prod.deletar', $prod->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Deletando o produto: {{$prod->nome}} </button>
    </form>
@endsection