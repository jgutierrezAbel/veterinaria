@extends('layouts.cuerpo')


@section('hijos')
<h1>Agregar nueva Mascota</h1>

<div class="row">
<div class="col">

<form action="/mascota" class= "form-control" method="POST">
@csrf
<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre_mascota"  name="nombre_mascota">
</div>

<div class="mb-3">
    <label for="fecha_nac" class="form-label">Fecha de nacimiento (YYYY-MM-DD)</label>
    <input type="text" class="form-control" id="fecha_nac" name="fecha_nac" pattern="\d{4}-\d{2}-\d{2}" title="Por favor ingrese una fecha en formato YYYY-MM-DD">
</div>

<div class="mb-3">
 <label for="id_genero" class="form-label">Género del empleado</label>
   <div>
      <input type="radio" id="masculino" name="id_genero" value="masculino">
        <label for="masculino">Macho</label>
       </div>
        <div>
         <input type="radio" id="femenino" name="id_genero" value="femenino">
        <label for="femenino">Hembra</label>
          </div>
    </div>



<div class="mb-3">
<label for="clie" class="form-label">seleccione el cliente</label>
                
 <select class="form-control" id="clie" name="clie">
 <option value="">Seleccione el cliente</option>
 
    @foreach ($clie as $item)
  <option value="{{ $item->id }}">{{ $item->id }}</option>
  @endforeach
  
  </select>
</div>



            




<div class="mb-3">
<label for="tipo" class="form-label">seleccione un tipo</label>
                
 <select class="form-control" id="tipo" name="tipo">
 <option value="">Seleccione un tipo</option>
    @foreach ($tipo as $item)
  <option value="{{ $item->id }}">{{ $item->tipo_mascota }}</option>
  @endforeach
  </select>
</div>

<div class="mb-3">
<label for="espe" class="form-label">seleccione la especialidad</label>
                
 <select class="form-control" id="espe" name="espe">
 <option value="">Seleccione una especialidad</option>
    @foreach ($espe as $item)
  <option value="{{ $item->id }}">{{ $item->tipo_especialidad }}</option>
  @endforeach
  </select>
</div>










<div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/mascota" class="btn btn-danger">Cancelar</a>

</div>
</div>
</div>
</form>
</form>
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


