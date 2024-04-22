@extends('layouts.layout_form')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
    <div>
        <form action="{{ route('requests.store') }}" method="POST" class="group relative">
           @csrf
            
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-600">Titulo</label>
                <input type="text"
                    class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none w-full text-sm leading-6 text-slate-900 placeholder-slate-400 rounded-md py-2 pl-10 ring-1 ring-slate-200 shadow-sm"
                    name="title" wire:model.blur="title" placeholder="Titulo..." />
            </div>
    
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Contenido</label>
                <input type="text"
                    class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none w-full text-sm leading-6 text-slate-900 placeholder-slate-400 rounded-md py-2 pl-10 ring-1 ring-slate-200 shadow-sm"
                    name="content" wire:model.blur="content" placeholder="Contenido..." />
            </div>
    
            <!-- Botón de Registro -->
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">
                    Enviar
                </button>
            </div>
            {{-- <div class="mb-4">
                <button id="borrar" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Borrar formulario</button>
            </div> --}}
        </form>
    </div>
@endsection


