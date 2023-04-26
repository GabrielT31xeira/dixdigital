@extends('layouts.app', ['page' => __('Minhas Notícias'), 'pageSlug' => 'noticia'])

@section('content')
    <h1>Minhas Notícias</h1>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <a class="btn btn-success" href="{{ route('noticia.create') }}">Adicionar notícias</a>
    <form action="{{ route('noticia.search') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3 mt-4">
            <span class="input-group-text" id="basic-addon1">Pesquise a notícia pelo título:</span>
            <input type="text" class="form-control" placeholder="Digite o título" name="title" aria-label="Title"
                   aria-describedby="basic-addon1">
        </div>
        <button class="btn btn-success" type="submit">Pesquisar</button>
    </form>
    @if(count($noticias) == 0)
        <p>Sem notícias criadas por você</p>
    @endif
    @if(count($noticias) != 0)
        <table class="table table-bordered mt-2">
            <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Descricao</th>
                <th>Criado em</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($noticias as $item)
                <tr>
                    <th>{{ $item->id }}</th>
                    <th>{{ $item->title }}</th>
                    <th>{{ $item->description }}</th>
                    <th>{{ $item->created_at->format('d/m/Y H:i:s') }}</th>
                    <th>
                        <form action="{{ route('noticia.destroy', $item->id) }}" method="Post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Apagar</button>
                            <a href="{{ route('noticia.edit', $item->id) }}" class="btn btn-warning">Editar</a>
                        </form>
                    </th>
                </tr>
            @endforeach
            @endif
            </tbody>
        </table>
        @endsection
