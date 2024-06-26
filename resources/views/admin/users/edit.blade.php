@extends('admin.layouts.app')

@section('title', 'Editar Usuário')

@section('content')    
<h1>Editar Usuário {{ $user->name }}</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nome" value="{{ $user->name }}">
    <input type="email" name="email" placeholder="E-mail" value="{{ $user->email }}">
    <input type="password" name="password" placeholder="Senha">
    <input type="submit" value="Cadastrar">
</form>
@endsection