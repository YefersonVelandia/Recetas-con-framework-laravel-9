@extends('layouts.app')

@section('content')

    <article class="contenido-receta">
        <h1 class="text-center mb-4"> {{ $receta->titulo }} </h1>

        <div class="imagen-receta">
            <img src="/storage/{{ $receta->imagen }}" class="w-100">
        </div>

        <div class="receta-meta">
            <p>
                <span class="font-weight-bold text-primary">Escrito en:</span>
                {{ $receta->categoria->nombre }}
            </p>
            <p>
                {{-- Todo: mostrar nombre del usuario --}}
                <span class="font-weight-bold text-primary">Autor:</span>
                {{ $receta->user_id }}
            </p>

            <p>
                <span class="font-weight-bold text-primary">Fecha de creación:</span>
                {{ $receta->created_at}}
            </p>
            <fecha-receta></fecha-receta>

            <div class="ingredientes">
                <h2 class="my-3 text-primary">Ingredientes</h2>

                {{-- imprimir con codigo html --}}
                {!! $receta->ingredientes !!}
            </div>
            
            <div class="preparacion">
                <h2 class="my-3 text-primary">preparación</h2>

                {{-- imprimir con codigo html --}}
                {!! $receta->preparacion !!}
            </div>
        </div>
    </article>
    
@endsection