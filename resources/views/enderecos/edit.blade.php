@extends('_template.template')

@section('titulo', 'HOME')

@section('conteudo')

    <div class="grid grid-cols-1 divide-y">
        @if ($errors->any())
            <div class="bg-red-300 border border-red-400 px-4 py-3 rounded relative" role="alert">

                @foreach ($errors->all() as $error)
                    <span class="block sm:inline">{{ $error }}</span><br>
                @endforeach
            </div>
        @endif

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
