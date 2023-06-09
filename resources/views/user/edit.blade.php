@extends('layouts.app', ['page' => __('Administrar Usuario'), 'pageSlug' => 'user'])

@section('content')
    <h1>Editar Usuario</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="input-group mb-3 mt-4">
            <span class="input-group-text" id="basic-addon1">Nome</span>
            <input value="{{$user->name}}" type="text" class="form-control" placeholder="Nome" name="name"
                   aria-label="Username" aria-describedby="basic-addon1">
          </div>
          @error('name')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Email</span>
            <input value="{{$user->email}}" type="text" class="form-control" placeholder="Email" name="email"
                   aria-label="email" aria-describedby="basic-addon1">
          </div>
          @error('email')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Senha</span>
            <input type="password" class="form-control"
                   placeholder="Senha" name="password" aria-label="password" aria-describedby="basic-addon1">
          </div>
          @error('password')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror

          <button type="submit" class="btn btn-primary ml-3">Atualizar</button>
    </form>
@endsection
