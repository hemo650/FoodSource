@extends('template')

@section('content')

<div class="container">
  <h1>Add a new meal</h1>

<div style="margin: 50px 0">
  <div class="form-group">
    <label for="exampleInputEmail1">Meal name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Meal name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Quantity</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Meal name">
  </div>

  <a href="{{ url('account') }}">
    <button type="submit" class="btn btn-primary">Submit</button>
  </a>
</div>
</div>

@endsection
