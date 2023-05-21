@extends('index')
@section('content')
<div class="container">
  <h1 class="text-center">Witch Calculator (PHP Version)</h1>
  <form method="POST" action="{{ secure_url('/calculate-average-kills') }}" class="mt-4">
    @csrf
    <div id="persons">
      <div class="person-fields" index="0">
        <div class="row">
          <input class="m10" type="number" name="persons[0][age_of_death]" placeholder="Age of Death">
          <input class="m10" type="number" name="persons[0][year_of_death]" placeholder="Year of Death">
          <button type="button" class="btn btn-danger remove-person m10">Remove Person</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <button type="submit" class="btn btn-primary center" id="add-person">Add Person</button>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <button type="submit" class="btn btn-primary center">Calculate</button>
      </div>
    </div>
  </form>
</div>
