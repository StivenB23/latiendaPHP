@extends('layouts.menu')

@section('contenido')
    <div class="row">
        <h1 class="blue-text text-darken-4">NUEVO PRODUCTO</h1>
    </div>
    <div class="row">
        <form action="{{ route('productos.store') }}" class="col s8" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col s8 input-field">
                    <input id="first_name" type="text" class="validate" name="nombre">
                    <label for="first_name">Nombre de producto:</label>
                    <div class="red-text text-darken-3"> {{ $errors->first('nombre') }}</div>
                </div>
            </div>
            <div class="row">
                <div class="col s8 input-field">
                    <textarea name="description" id="description" class="materialize-textarea" cols="30" rows="10"></textarea>
                    <label for="description">Descripción:</label>
                    <div class="red-text text-darken-3"> {{ $errors->first('description') }}</div>
                </div>
            </div>
            <div class="row">
                <div class="col s8 input-field">
                    <input type="text" id="precio" name="precio">
                    <label for="precio">Precio:</label>
                    <div class="red-text text-darken-3"> {{ $errors->first('precio') }}</div>
                </div>
            </div>
            <div class="row">
                <div class="col s8 file-field input-field">
                    <div class="btn light-blue ">
                        <div class="red-text text-darken-3"> {{ $errors->first('image') }}</div>
                        <span>Imagen de producto</span>
                        <input type="file" name="image">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8">
                    <select multiple name="marca">
                        <option value="" selected>Seleccionar Marca</option>
                        @foreach ($marcas as $marca)
                            <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                        @endforeach
                        <div class="red-text text-darken-3">{{$errors->first('marca')}}</div>

                    </select>
                    <label>Seleccione la marca:</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8">
                    <select multiple name="categoria">
                        <option value="" selected>Seleccionar Categoria</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                        <div class="red-text text-darken-3">{{$errors->first('categoria')}}</div>
                    </select>
                    <label>Seleccione la categoria:</label>
                </div>
            </div>

            <div class="row">
                <button class="btn waves-effect light-blue darken-1" type="submit" name="action">Submit
                    <i class="material-icons left">send</i>Enviar
                </button>
            </div>
        </form>
    </div>
@endsection
