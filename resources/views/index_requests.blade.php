@extends('layouts.layout_form')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <h1>Lista de Registros</h1>

    <table class="table-auto">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <!-- Agrega más columnas según tus necesidades -->
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $registro)
                <tr>
                    <td>{{ $registro->title }}</td>
                    <td>{{ $registro->content }}</td>
                    <!-- Agrega más celdas según tus necesidades -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
