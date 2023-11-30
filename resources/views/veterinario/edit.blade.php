@extends('layouts.cuerpo')

@section('hijos')
    <h1>Editar veterinario</h1>

    <div class="row">
        <div class="col">
            <form action="/veterinario/{{$editarvet->id}}" class="form-control" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del veterinario</label>
                    <input type="text" class="form-control" id="nombre" value="{{$editarvet->nombre}}" name="nombre">
                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido del veterinario</label>
                    <input type="text" class="form-control" id="apellido" value="{{$editarvet->apellido}}" name="apellido">
                </div>

                <div class="mb-3">
                    <label for="fecha_nac" class="form-label">Fecha de nacimiento (YYYY-MM-DD)</label>
                    <input type="text" class="form-control" id="fecha_nac" value="{{$editarvet->fecha_nac}}" name="fecha_nac" pattern="\d{4}-\d{2}-\d{2}" title="Por favor ingrese una fecha en formato YYYY-MM-DD">
                </div>

                <div class="mb-3">
                    <label for="id_especialidad" class="form-label">Especialidad</label>
                    <input type="text" class="form-control" id="id_especialidad" value="{{$editarvet->id_especialidad}}" name="id_especialidad">
                </div>

                <div class="mb-3">
                    <label for="id_nacionalidad" class="form-label">Nacionalidad</label>
                    <input type="text" class="form-control" id="id_nacionalidad" value="{{$editarvet->id_nacionalidad}}" name="id_nacionalidad">
                </div>

                <div class="mb-3">
                    <label for="id_genero" class="form-label">Género del veterinario</label>
                    <div>
                        <input type="radio" id="masculino" value="masculino" name="id_genero" {{$editarvet->id_genero == 'masculino' ? 'checked' : ''}}>
                        <label for="masculino">Masculino</label>
                    </div>
                    <div>
                        <input type="radio" id="femenino" value="femenino" name="id_genero" {{$editarvet->id_genero == 'femenino' ? 'checked' : ''}}>
                        <label for="femenino">Femenino</label>
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="/veterinario" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        const inputFecha = document.getElementById('fecha_nac');

        inputFecha.addEventListener('input', function(e) {
            let inputValue = e.target.value.replace(/\D/g, '');
            if (inputValue.length > 4) {
                inputValue = inputValue.slice(0, 4) + '-' + inputValue.slice(4, 6) + '-' + inputValue.slice(6, 8);
            } else if (inputValue.length > 6) {
                inputValue = inputValue.slice(0, 4) + '-' + inputValue.slice(4, 6);
            }
            e.target.value = inputValue;
        });
    </script>
@endsection
