@extends('layouts.app', ['page' => __('Minhas Notícias'), 'pageSlug' => 'noticia'])

@section('content')
    <h1>Editar Noticia</h1>
    <form action="{{ route('noticia.update', $noticias->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="input-group mb-3 mt-4">
            <span class="input-group-text" id="basic-addon1">Titulo</span>
            <input value="{{$noticias->title}}" type="text" class="form-control" placeholder="Nome" name="title"
                   aria-describedby="basic-addon1">
        </div>
        @error('name')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Descrição</span>
            <input value="{{$noticias->description}}" type="textarea" class="form-control" placeholder="Descricão" name="description"
                   aria-describedby="basic-addon1">
        </div>
        @error('email')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </form>
@endsection
