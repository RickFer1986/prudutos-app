

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif

    @csrf
        <label for="">Nome</label>
        <input type="text" name="nome" placeholder="Nome do produto" value="{{ $prod->nome ?? old('nome') }}">
        <br><br>
        <label for="">Detalhes</label>
        <input type="text" name="detalhes" placeholder="Detalhes do produto" value="{{ $prod->detalhes ?? old('detalhes') }}">
        <br><br>
        <label for="">Quantidade</label>
        <input type="number" name="quantidade" placeholder="Quantidade em estoque" value="{{ $prod->quantidade ?? old('quantidade') }}">
        <br><br>
        <label for="">Fornecedor</label>
        <input type="text" name="fornecedor" placeholder="Nome do fornecedor" value="{{ $prod->fornecedor ?? old('fornecedor') }}">
        <br><br>
        {{-- <button type="submit" class="btn btn-primary">Adicionar</button> --}}
        

