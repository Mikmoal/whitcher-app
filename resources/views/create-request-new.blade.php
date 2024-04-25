@extends('layouts.layout_form')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="flex justify-center">
        <form action="{{ route('requests.store') }}" method="POST" class="flex flex-col group relative w-3/4">
            @csrf

            <div class="mb-4 bg-white rounded-md">
                <div class="w-5/6 flex flex-col">
                    <div class="linea_textual">
                        <label for="title" class="my-5 block text-sm font-medium text-gray-600" style="">Titulo</label>
                        <input type="text"
                            class="w-full border-transparent outline-0 text-sm leading-6 text-slate-900 placeholder-slate-400 py-2"
                            name="title" wire:model.blur="title" placeholder="Tu respuesta" />
                    </div>
                </div>
            </div>

            <div class="mb-4 bg-white rounded-md">
                <div class="w-5/6 flex flex-col">
                    <div class="linea_textual">
                        <label for="content" class="my-5 block text-sm font-medium text-gray-600" style="">Contenido</label>
                        <input type="text"
                            class="w-full border-transparent outline-0 text-sm leading-6 text-slate-900 placeholder-slate-400 py-2"
                            name="content" wire:model.blur="title" placeholder="Tu respuesta" />
                    </div>
                </div>
            </div>

            <!-- Botón de Registro -->
            <div class="flex justify-between">
                <button type="submit" class="w-1/6 bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">
                    Enviar
                </button>

                <button class="w-1/6 bg-transparent text-blue-500 p-2 rounded-md hover:bg-blue-100" id="delete_btn">
                    Borrar formulario
                </button>
            </div>
        </form>
    </div>
@endsection
