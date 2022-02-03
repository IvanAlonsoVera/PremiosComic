<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear un Premio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @isset($premio)
                        <form enctype="multipart/form-data" action="{{ url('modificar') }}" method="post">
                        @csrf
                            <x-label for="titulo">Titulo del comic:</x-label>
                            <x-input type="text" id="titulo" name="titulo" value="{{$premio->comic}}"></x-input>
                            <br><br>

                            <x-label for="anio">Año del premio:</x-label>
                            <x-input type="text" id="anio" name="anio" value="{{$premio->anio}}"></x-input>
                            <br><br>

                            <x-label for="autor">Autor del comic:</x-label>
                            <x-input type="text" id="autor" name="autor" value="{{$premio->autor}}"></x-input>
                            <br><br>

                            <x-label for="portada">Portada del comic:</x-label>
                            <x-input type="file" id="portada" name="portada" value="{{$premio->portada}}"></x-input>
                            <br><br>

                            <x-button>{{ __('Modificar premio')}}</x-button>
                    @else
                        <form enctype="multipart/form-data" action="{{ url('crearPremio') }}" method="post">
                        @csrf
                            <x-label for="titulo">Titulo del comic:</x-label>
                            <x-input type="text" id="titulo" name="titulo"></x-input>
                            <br><br>

                            <x-label for="anio">Año del premio:</x-label>
                            <x-input type="text" id="anio" name="anio"></x-input>
                            <br><br>

                            <x-label for="autor">Autor del comic:</x-label>
                            <x-input type="text" id="autor" name="autor"></x-input>
                            <br><br>

                            <x-label for="portada">Portada del comic:</x-label>
                            <x-input type="file" id="portada" name="portada"></x-input>
                            <br><br>

                            <x-button>{{ __('Crear premio')}}</x-button>
                    @endisset
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>