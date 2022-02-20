@extends('layouts.app')

@section('content')

    <a href="{{ route('recetas.index') }}" class="btn btn-primary mr-2 text-white">Listar recetas</a>
    <h2 class="text-center mb-5">crea tus recetas</h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form method="POST" action="{{ route('recetas.store') }}" novalidate>
                 @csrf {{-- Token necesario --}}
                <div class="form-group">
                  <label for="titulo">Titulo de la receta</label>
                  <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" id="titulo" placeholder="Titulo Receta" value={{ old('titulo') }} >  

                  @error('titulo')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                  @enderror
                      
                </div>

                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select 
                        name="categoria"
                        class="form-control @error('categoria') is-invalid @enderror""
                        id="categoria"
                    >
                        <option value=""> -- Seleccione -- </option>
                        @foreach($recetas as $id => $nombre)
                            <option value="{{ $id}}" {{ old('categoria') == $id ? 'selected' : ''}}> {{$nombre}}</option>
                        @endforeach
                    </select>

                    @error('categoria')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary mt-2"> Agregar receta </button>
                </div>
            </form>
        </div>
    </div>

   
@endsection





