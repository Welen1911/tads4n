@extends('_template.template')

@section('titulo', 'HOME')

@section('conteudo')


        <div>
            <div class="flex justify-between">
                <h2 class="text-center text-2xl font-bold mb-2">{{ $usuario->nome }}</h2>

            </div>
            <div class="flex justify-between">
                <ul>
                    <li>
                        E-mail: {{ $usuario->email }}
                    </li>
                    <li>
                        Celular: {{ $usuario->telefone->celular }}
                    </li>
                    <li>
                        Telefone: {{ $usuario->telefone->telfixo }}
                    </li>
                    <li>
                        <a href="{{ route('endereco.create', $usuario->id) }}" class="text-green-500 underline">Cadastrar Endereço</a>
                    </li>
                </ul>
            </div>
            @if (isset($usuario->endereco))
                <table class="min-w-full bg-white border border-gray-300 rounded-md shadow-md shadow-gray-400">
                    <tr>
                        <td class="py-2 px-4 border-b">ID</td>
                        <td class="py-2 px-4 border-b">Logradouro</td>
                        <td class="py-2 px-4 border-b">Número</td>
                        <td class="py-2 px-4 border-b">Ações</td>
                    </tr>
                    @foreach ($usuario->endereco as $endereco)
                        <tr
                            class="text-center
                        @if ($loop->iteration % 2 == 0) bg-gray-200 @endif
                    ">
                            <td class="px-2">{{ $endereco->id }}</td>
                            <td class="px-2">{{ $endereco->logradouro }}</td>
                            <td class="px-2">{{ $endereco->numero }}</td>
                            <td class="px-2">
                                <a href="{{ route('endereco.edit', [$endereco->id, $usuario->id]) }}" class="text-green-500 underline">Editar</a>
                                <form action="{{ route('endereco.destroy', [$endereco->id, $usuario->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit"
                                        class="text-red-500 underline" value="Deletar">
                                    </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @else
            @endif
        </div>


@endsection
