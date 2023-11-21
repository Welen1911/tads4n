@extends('_template.template')

@section('titulo', 'HOME')

@section('conteudo')

    <div>
        <div class="flex justify-between">
            <h2 class="text-center text-2xl font-bold mb-2">Usuários Cadastrados</h2>

            <a href="{{route('usuario.create')}}" class="pt-4 text-green-700 hover:underline">
                Cadastrar
            </a>
        </div>
        @if (isset($usuarios))
            <table class="min-w-full bg-white border border-gray-300 rounded-md shadow-md shadow-gray-400">
                <tr>
                    <td class="py-2 px-4 border-b">ID</td>
                    <td class="py-2 px-4 border-b">Nome</td>
                    <td class="py-2 px-4 border-b">E-mail</td>
                    <td class="py-2 px-4 border-b">Senha</td>
                    <td class="py-2 px-4 border-b">IDE</td>
                    <td class="py-2 px-4 border-b">Celular</td>
                    <td class="py-2 px-4 border-b">Fixo</td>
                    <td class="py-2 px-4 border-b">Ações</td>
                </tr>
                @foreach ($usuarios as $usuario)
                    <tr
                        class="text-center
                        @if ($loop->iteration % 2 == 0) bg-gray-200 @endif
                    ">
                        <td class="px-2">{{ $usuario->id }}</td>
                        <td class="px-2"><a href="{{ route('usuario.show', $usuario->id) }}"  class="text-green-500 underline">{{ $usuario->nome }}</a></td>
                        <td class="px-2">{{ $usuario->email }}</td>
                        <td class="px-2">{{ $usuario->senha }}</td>
                        <td class="px-2">{{ $usuario->telefone->id }}</td>
                        <td class="px-2">{{ $usuario->telefone->celular }}</td>
                        <td class="px-2">{{ $usuario->telefone->telfixo }}</td>
                        <td class="px-2">
                            <a href="{{ route('usuario.edit', $usuario->id) }}" class="text-green-500 underline">Editar</a>
                            <form action="{{ route('usuario.destroy', $usuario->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit"
                                    class="text-red-500 underline" value="Deletar">
                                </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $usuarios->links() }}
        @else
        @endif
    </div>

@endsection
