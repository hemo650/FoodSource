@extends('template')

@section('content')

<div class="container">
  <h1>Setup your restaurant</h1>

  <div style="margin: 50px 0">
  <div class="form-group">
    <label for="exampleInputEmail1">Name of your restaurant</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name of your restaurant">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Address of your restaurant</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address of your restaurant">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Opening hours</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Opening hours">
  </div>

  <a href="{{ url('setup-success')}}">
    <button type="submit" class="btn btn-primary">Submit your restaurant</button>
  </a>

</div>
</div>

@endsection
