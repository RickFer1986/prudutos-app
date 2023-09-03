@extends('site.layouts.modelo')

@section('conteudo')
    <h1>Adicionar Produto</h1>

    <form action="{{ route('prod.salvar') }}" method="post">
        @include('site.layouts._partials.form')
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
@endsection
