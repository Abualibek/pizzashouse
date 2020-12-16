@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-heigh">
        <div class="content">
            <div class="title m-b-md">
             Pizza & Kebab List
            </div> 
            <p class="mssg">{{session('mssg')}}</p>
          <a href="{{ route('pizzas.create') }}"> Order a Pizza </a></br>
          <a href="{{ route('kebabs.create') }}"> Order a Kebab </a></br>

          <a href="{{ route('pizzas.index') }}"> See Pizza Orders</a></br>
          <a href="{{ route('kebabs.index') }}"> See Kebab Orders</a>

          
        </div>
</div>
@endsection
 
