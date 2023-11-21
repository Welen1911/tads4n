<table class="m-auto">

    <tr>
        <th colspan="2">Endereço:</th>
    </tr>
    <tr>
        <td class="pt-2">
            <label for="telfixo">Lgdouro:</label>
        </td>
        <td>
            <input title="Logradouro..." type="text" name="logradouro" id="telfixo" value="{{ $endereco->logradouro ?? old('logradouro') }}"
                class="border-b-2 border-green-400 rounded text-sm px-1 w-72 h-6 text-gray-500 focus:border-green-800">
        </td>
    </tr>
    <tr>
        <td class="pt-2">
            <label for="telfixo">Número:</label>
        </td>
        <td>
            <input title="Número..." type="text" name="numero" id="telfixo" value="{{ $endereco->numero ?? old('numero') }}"
                class="border-b-2 border-green-400 rounded text-sm px-1 w-72 h-6 text-gray-500 focus:border-green-800">
        </td>
    </tr>

    {{-- Botões --}}
    <tr>
        <td colspan="2" class="pt-4 text-center">
            <input type="submit" value="Adicionar"
                class="bg-green-300 p-1 w-20 rounded hover:shadow-md hover:shadow-gray-400">
            <a href="{{ route('usuario.index') }}">
                <input type="button" value="Cancelar"
                    class="bg-red-300 p-1 w-20 rounded hover:shadow-md hover:shadow-gray-400">
            </a>
        </td>
    </tr>
</table>
