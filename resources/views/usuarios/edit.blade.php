@extends('_template.template')

@section('titulo', 'Cadastro de Usuário')

@section('conteudo')
    <div class="grid grid-cols-1 divide-y">
        @if ($errors->any())
            <div class="bg-red-300 border border-red-400 px-4 py-3 rounded relative" role="alert">

                @foreach ($errors->all() as $error)
                    <span class="block sm:inline">{{ $error }}</span><br>
                @endforeach
            </div>
        @endif
        <form action="{{ route('usuario.update', $usuario->id) }}" method="post"
            class="bg-gray-200 w-96 p-4 rounded-lg shadow-2xl">
            @csrf
            @method('put')
            <table class="m-auto">
                <caption class="text-2xl font-bold">Editando</caption>
                {{-- Usuário --}}
                <tr>
                    <th colspan="2">Pessoa</th>
                </tr>
                <tr>
                    <td class="pt-2">
                        <label for="nome">Nome:</label>
                    </td>
                    <td>
                        <input type="text" name="nome" id="nome" value="{{ $usuario->nome }}"
                            class="border-b-2 border-green-400 rounded text-sm px-1 w-72 h-6 text-gray-500 focus:border-green-800">
                    </td>
                </tr>
                <tr>
                    <td class="pt-2">
                        <label for="email">E-mail:</label>
                    </td>
                    <td>
                        <input type="text" name="email" id="email" value="{{ $usuario->email }}"
                            class="border-b-2 border-green-400 rounded text-sm px-1 w-72 h-6 text-gray-500 focus:border-green-800">
                    </td>
                </tr>
                <tr>
                    <td class="pt-2">
                        <label for="senha">Senha:</label>
                    </td>
                    <td>
                        <input type="password" name="senha" id="senha" value="{{ old('senha') }}"
                            class="border-b-2 border-green-400 rounded text-sm px-1 w-72 h-6 text-gray-500 focus:border-green-800"">
                    </td>
                </tr>
                {{-- Telefone --}}
                <tr>
                    <th colspan="2">Telefone</th>
                </tr>
                <tr>
                    <td class="pt-2">
                        <label for="celular">Celular:</label>
                    </td>
                    <td>
                        <input type="text" name="celular" id="celular" value="{{ $usuario->telefone->celular }}"
                            class="border-b-2 border-green-400 rounded text-sm px-1 w-72 h-6 text-gray-500 focus:border-green-800">
                    </td>
                </tr>
                <tr>
                    <td class="pt-2">
                        <label for="telfixo">Fixo:</label>
                    </td>
                    <td>
                        <input title="Telefone fixo..." type="text" name="telfixo" id="telfixo"
                            value="{{ $usuario->telefone->telfixo }}"
                            class="border-b-2 border-green-400 rounded text-sm px-1 w-72 h-6 text-gray-500 focus:border-green-800">
                    </td>
                </tr>

                {{-- Botões --}}
                <tr>
                    <td colspan="2" class="pt-4 text-center">
                        <input type="submit" value="Editar"
                            class="bg-green-300 p-1 w-20 rounded hover:shadow-md hover:shadow-gray-400">
                        <a href="{{ route('usuario.index') }}">
                            <input type="button" value="Cancelar"
                                class="bg-red-300 p-1 w-20 rounded hover:shadow-md hover:shadow-gray-400">

                        </a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection
