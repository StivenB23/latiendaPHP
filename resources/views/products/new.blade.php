@extends('layouts.menu')

@section('contenido')
<div class="row">
    <h1 class="blue-text text-darken-4">NUEVO PRODUCTO</h1>
</div>
    <div class="row">
        <form action="" class="col s8" method="post">
            <div class="row">
                <div class="col s8 input-field center-align">
                    <input id="first_name" type="text" class="validate center-align" name="nombre">
                    <label for="first_name">Nombre de producto</label>
                </div>

            </div>
            <div class="row">
                <div class="col s8 input-field">
                    <textarea name="desc" id="desc" class="materialize-textarea" cols="30" rows="10"></textarea>
                    <label for="desc">Descripción</label>
                </div>
            </div>
            <div class="row">

            </div>
            <div class="row">
                <div class="col s8 input-field">
                    <input type="text" id="precio" name="precio">
                    <label for="precio">Precio:</label>
                </div>
            </div>
            <div class="row">
                <div class="col s8 file-field input-field">
                    <div class="btn light-blue ">
                      <span>File</span>
                      <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text">
                    </div>
                  </div>
            </div>
        </form>
    </div>
@endsection
