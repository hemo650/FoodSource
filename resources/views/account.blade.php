@extends('template')

@section('content')

<div class="container">
  <h1>Restaurant Account</h1>
  <p>Create a new entry here if you have free food.</p>

  <a href="{{ url('add-meal')}}">
  <button type="button" class="btn btn-primary">Add a new meal</button>
</a>


  <!--Table-->
  <table id="tablePreview" class="table">
  <!--Table head-->
    <thead>
      <tr>
        <th>#</th>
        <th>Meal</th>
        <th>Since when</th>
        <th>Numbers</th>
      </tr>
    </thead>
    <!--Table head-->
    <!--Table body-->
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Pasta</td>
        <td>03/03/2019</td>
        <td>5</td>
      </tr>

      <tr>
        <th scope="row">1</th>
        <td>Pizza Margarita</td>
        <td>03/03/2019</td>
        <td>54</td>
      </tr>

    </tbody>
    <!--Table body-->
  </table>
  <!--Table-->
</div>

@endsection
