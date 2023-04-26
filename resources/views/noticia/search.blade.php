@extends('layouts.app', ['page' => __('Minhas Notícias'), 'pageSlug' => 'noticia'])

@section('content')
    <h1>Resultado da Pesquisa</h1>
    <a class="btn btn-success" href="{{ route('noticia.index') }}">Voltar</a>
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
        @foreach ($noticiasearch as $item)
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
        </tbody>
    </table>
@endsection
