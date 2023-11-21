@extends('_template.template')

@section('titulo', 'HOME')

@section('conteudo')

    <div class="grid grid-cols-1 divide-y">


        <div>
            <form action="{{ route('endereco.edit', [$endereco->id, $usuario->id]) }}" method="post"
                class="bg-white w-96 p-4 rounded-lg shadow-2xl">
                @csrf
                @method('PUT')
                @include('enderecos.form')
            </form>
        </div>
    </div>


@endsection
