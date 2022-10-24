<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nueva Materia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div  class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('materias.store') }}" method="post">
                        @csrf
                        
                        <label for="mat_nombre">Nombre de la materia</label>
                        <br>
                        <x-input.small type="text" name='mat_nombre'/>
                        <br>
                        <x-button.green type="submit">Guardar</x-button.green>
                        <x-link.red href="{{ route('materias.index') }}">Cancelar</x-link.red>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>