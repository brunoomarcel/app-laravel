@extends('admin.layouts.app')

@section('title', 'Criar Usuário')

@section('content')    
<h1>Novo Usuário</h1>

{{-- @inclue('admin.includes.alerts') --}}
<x-alert/>

{{-- @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif --}}

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
    <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
    <input type="password" name="password" placeholder="Senha">
    <input type="submit" value="Cadastrar">
</form>
@endsection