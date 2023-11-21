@extends('_template.template')

@section('titulo', 'HOME')

@section('conteudo')

    <div class="grid grid-cols-1 divide-y">


        <div>
            <form action="{{ route('usuario.storeEndereco', $usuario->id) }}" method="post"
                class="bg-white w-96 p-4 rounded-lg shadow-2xl">
                @csrf
                @include('enderecos.form')
            </form>
        </div>
    </div>


@endsection
