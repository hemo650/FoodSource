@extends('template')

@section('content')


<div class="container">
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">
        Get free food as a homeless.<br />
        Help reduce food waste and get your stomach filled.
      </h1>
      <p class="lead text-muted">
        We know that sometimes life is very stressful. That's why we want to help you get a good meal for free. Become part of FoodSource and get your first free meal today.
      </p>
      <p>
        <a href="{{ url('submit-number') }}" class="btn btn-primary my-2">Submit your phone number</a>
      </p>
    </div>
  </section>
</div>

<div class="container">
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">
        Get food now<br/>
        Just send a message +1 415 610 8804
      </h1>
      <p class="lead text-muted">
        If you text 'food' to this number we will connect you with a location you can get free food from
      </p>

      <button class="btn btn-primary my-2">+1 415 610 8804</button>

    </div>
  </section>
</div>

<div class="container">
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">
        Donate the leftover food.<br/>
        Become a FoodSource restaurant
      </h1>
      <p class="lead text-muted">
        With our web platform, we enable homeless people to get food from restaurants for free, thereby contributing to a better San Franaisco. Our goal is to significantly reduce the amount of discarded food.
      </p>
      <p>
        <a href="{{ url('setup') }}" class="btn btn-primary my-2">Setup your location</a> | <a href="{{ url('login') }}" class="btn btn-secondary my-2">Login to your account</a>
      </p>
    </div>
  </section>
</div>

@endsection
