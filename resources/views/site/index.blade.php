@extends('site.layouts.modelo')

@section('conteudo')
    @if (session('message'))
        <div style="background: blue; color: white;">
            {{ session('message') }}
        </div>
    @endif
    <h1>Home dos produtos</h1>
    <hr>
    <!-- Botão de adicionar produtos -->
    <a href="{{ route('prod.add') }}">
        <button class="btn btn-primary">Adicionar</button>
    </a>
    <br><br>
    <!-- Campo de Busca -->
    <form action="{{ route('prod.buscar') }}" method="post">
        @csrf
        {{-- @method(HEAD) --}}
        <input type="text" name="buscar" placeholder="Pesquisar Produto">
        <button type="submit" class="btn btn-dark">Buscar</button>
    </form>

    <hr>

    <h1>Produtos</h1>

    <table class="table">

        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Detalhes</th>
            </tr>
        </thead>
        @foreach ($prods as $prod)
            <tbody>
                <tr>
                    <th scope="row">{{ $prod->id }}</th>
                    <td>{{ $prod->nome }}</td>
                    <td>{{ $prod->detalhes }}</td>
                    <td><a href="{{ route('prod.editar', $prod->id) }}"><i class="bi bi-pen-fill"></i></a></td>
                    <td><a href="{{ route('prod.exibir', $prod->id) }}"><i class="bi bi-eye-fill"></i></a></td>
                    <td><a href="{{ route('prod.deletar', $prod->id) }}"><i class="bi bi-trash3-fill"></i></a></td>
                </tr>
            </tbody>
        @endforeach
    </table>

    @if (isset($filters))
        {{ $prods->appends($filters)->links() }}
    @else
        {{ $prods->links() }}
    @endif
@endsection
