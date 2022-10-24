<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Grados') }}
        </h2>
    </x-slot>

    @if ($errors->any())
	    <div class="bg-red-200 px-50 text-center">
            <ul>
            @foreach ($errors->all() as $error)
                <li>Error: {{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <div class="py-12">
        <div  class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-link.default href="{{ route('grados.create') }}">Nuevo grado</x-link.default>
                    <br><br>
                    <div class="grid grid-cols-1 shadow-lg max-w-[60%] place-items-center border-solid border-2 rounded-md text-center p-5">
                        <div class="place-self-center">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grd_grados as $grd_grado )
                                        <tr>
                                            <td><x-link.gray href="{{ route('grados.show', $grd_grado) }}">{{ $grd_grado->grd_nombre }}</x-link.gray></td>
                                            <td class="inline-flex gag-4">
                                                <x-link.default href="{{ route('grados.edit', $grd_grado) }}">Editar</x-link.default>
                                                <form action="{{ route('grados.destroy', $grd_grado) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-button.red type='submit' onclick=" return confirm('Esta seguro')" class="red">Borrar</x-button.red>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if($grd_grados->hasPages())
                                <div class="text-sm pt-5">
                                    {{ $grd_grados->links() }}
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-layouts.app>