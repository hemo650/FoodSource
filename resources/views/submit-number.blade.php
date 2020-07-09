@extends('template')

@section('content')

<div style="margin: 100px 0;">
  
<div class="container" style="text-align: center;">
  <h1>Submit your phone number</h1>
  <p>
    To get the free food just submit your phone number.<br />
    You'll recive an text message as soon as a meal is ready for you
  </p>

</div>

<div class="container">



    <div style="max-width: 400px; margin: 0 auto; text-align: center;">
  <div class="form-group">
    <label for="exampleInputEmail1">your phone number is</label>
    <input type="email" class="form-control" id="phoneNumber" aria-describedby="phoneNumber" placeholder="Enter phone number">
  </div>

  <div style="float: right">
    <a href="{{ url('submit-number-success')}}">
    <button type="submit" class="btn btn-primary">Submit and start getting free food</button>
  </a>
  </div>

</div>

  <div style="clear: both;"></div>

</div>

</div>

@endsection
