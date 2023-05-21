@extends('index')
@section('content')
<div class="container">
  <h1>Witch Calculator Result</h1>
  <div class="row">
    <div class="col">
      <h3 class="center">The average number of people killed on the year of birth is:</h3>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h2 class="center">{{ $average_kills }}</h2>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a href="{{ URL::to('/witch-calculator') }}" class="btn btn-primary btn-center">Go Back</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <img class="image-center" src="https://assets.nintendo.com/image/upload/f_auto/q_auto/dpr_2.0/c_scale,w_400/ncom/en_US/games/switch/l/labyrinth-of-the-witch-switch/description-image" alt="Hero Logo">
    </div>
  </div>
</div>
