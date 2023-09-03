@extends('site.layouts.modelo')

@section('conteudo')
    <h1>Editar Produto</h1>

    <form action="{{ route('prod.salvarEdite', $prod->id) }}" method="post">
        {{-- @csrf --}}
        @method('put')
        @include('site.layouts._partials.form')
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@endsection
