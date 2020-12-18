@extends('layouts.base')

@section('content')
<div class="container" style="margin-bottom:0">
  <h2>Directorio de Cuerpos Academicos</h2>
  <p>Los siguientes proyectos estan disponibles para la realizacion de tesis, te invitamos a postularte:</p>
  <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
  <br>
  <br>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Nombre</th>
        <th>Area</th>
        <th>Sede</th>
        <th>Numero Telefonico</th>
        <th>Correo Electronico</th>

      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>mary@example.com</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
    
  </table>
</div>
<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>
@endsection