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
        <div style="margin-top: 15px">
            <form action="{{ route('usuario.store') }}" method="post" class="bg-gray-200 w-96 p-4 rounded-lg shadow-2xl">
                @csrf
                <table class="m-auto">
                    <caption class="text-2xl font-bold">Cadastrando</caption>
                    {{-- Usuário --}}
                    <tr>
                        <th colspan="2">Pessoa</th>
                    </tr>
                    <tr>
                        <td class="pt-2">
                            <label for="nome">Nome:</label>
                        </td>
                        <td>
                            <input type="text" name="nome" id="nome" value="{{ old('nome') }}"
                                class="border-b-2 border-green-400 rounded text-sm px-1 w-72 h-6 text-gray-500 focus:border-green-800">
                        </td>
                    </tr>
                    <tr>
                        <td class="pt-2">
                            <label for="email">E-mail:</label>
                        </td>
                        <td>
                            <input type="text" name="email" id="email" value="{{ old('email') }}"
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
                            <input type="text" name="celular" id="celular" value="{{ old('celular') }}"
                                class="border-b-2 border-green-400 rounded text-sm px-1 w-72 h-6 text-gray-500 focus:border-green-800">
                        </td>
                    </tr>
                    <tr>
                        <td class="pt-2">
                            <label for="telfixo">Fixo:</label>
                        </td>
                        <td>
                            <input title="Telefone fixo..." type="text" name="telfixo" id="telfixo"
                                value="{{ old('telfixo') }}"
                                class="border-b-2 border-green-400 rounded text-sm px-1 w-72 h-6 text-gray-500 focus:border-green-800">
                        </td>

                    </tr>
                    <tr>
                        <th colspan="2">Endereço:</th>
                    </tr>
                    <tr>
                        <td class="pt-2">
                            <label for="telfixo">Lgdouro:</label>
                        </td>
                        <td>
                            <input title="Logradouro..." type="text" name="logradouro" id="telfixo"
                                value="{{ old('logradouro') }}"
                                class="border-b-2 border-green-400 rounded text-sm px-1 w-72 h-6 text-gray-500 focus:border-green-800">
                        </td>
                    </tr>
                    <tr>
                        <td class="pt-2">
                            <label for="telfixo">Número:</label>
                        </td>
                        <td>
                            <input title="Número..." type="text" name="numero" id="telfixo"
                                value="{{ old('numero') }}"
                                class="border-b-2 border-green-400 rounded text-sm px-1 w-72 h-6 text-gray-500 focus:border-green-800">
                        </td>
                    </tr>

                    {{-- Botões --}}
                    <tr>
                        <td colspan="2" class="pt-4 text-center">
                            <input type="submit" value="Cadastrar"
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
    </div>

@endsection
