@extends('layouts.app', ['page' => __('Administrar Usuario'), 'pageSlug' => 'user'])

@section('content')
    <h1>Administrar Usuarios</h1>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <a class="btn btn-success" href="{{ route('user.create') }}">Adicionar usuario</a>
    <table class="table table-bordered mt-2">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Criado em</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>
                    <th>{{ $item->id }}</th>
                    <th>{{ $item->name }}</th>
                    <th>{{ $item->email }}</th>
                    <th>{{ $item->created_at->format('d/m/Y H:i:s') }}</th>
                    <th>
                        <form action="{{ route('user.destroy', $item->id) }}" method="Post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Apagar</button>
                            <a href="{{ route('user.edit', $item->id) }}" class="btn btn-warning">Editar</a>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
