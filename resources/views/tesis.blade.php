@extends('layouts.base')

@section('content')
<div class="container" style="margin-bottom:0">
  <h2>Proyectos Tesis</h2>
  <p>Los siguientes proyectos estan disponibles para la realizacion de tesis, te invitamos a postularte:</p>
  <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
  <br>
  <br>

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Nombre</th>
        <th>Objetivo</th>
        <th>Alcance</th>
        <th>Institucion</th>
        <th>Asesores</th>
        <th>Vacante</th>
        <th>Postular</th>

      </tr>
    </thead>

    <tbody id="myTable">
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
        <td></td>
        <td>
          <button><i class="fas fa-plus"></i></button>
        </td>
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
