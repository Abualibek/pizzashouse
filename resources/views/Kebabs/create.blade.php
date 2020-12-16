@extends('layouts.app')

@section('content')

<div class="wrapper create-pizza">
  <h1>Create a Kebab</h1>
  <form action="/kebabs" method="POST">
  @csrf 
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>

    <label for="type">Size:</label>
    <select name="type" id="type">
      <option value="small">Small</option>
      <option value="medium">Medium</option>
      <option value="large">Large</option>
    </select>

    <label for="base">Meat:</label>
    <select name="base" id="base">
      <option value="chicken">Chicken</option>
      <option value="beef">Beef</option>
      <option value="Chicken & Beef">Chicken & Beef</option>
    </select>
    
    <label for="extra">Choose crust:</label>
    <select name="extra" id="extra">
      <option value="NonSpicy">Non Spicy</option>
      <option value="MiddleSpicy">Middle Spicy</option>
      <option value="Spicy">Spicy</option>
    </select>
    <input type="submit" value="Order Pizza">
  </form>
</div>
        
@endsection
 
