@extends('admin.layouts.app')

@section('title', 'Listagem de Usuários')

@section('content')   
<h1>Usuários</h1>

    @if(session()->has('success'))
        {{ session('success') }}
    @endif
    <br>
    <a href="{{ route('users.create') }}">Novo Usuário</a>

    <x-alert/>
    
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>-
                        <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Nenhum registro encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}
@endsection