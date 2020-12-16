@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order from: {{ $kebab->name }}</h1>
    <p class="type">Type - {{ $kebab->type }}</p>
    <p class="base">Base - {{ $kebab->base }}</p>
    <p class="extra">extra - {{ $kebab->extra }}</p>
    
   
    <form action="{{ route ('kebabs.destroy', $kebab->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete order</button>
    </form>
</div>
 <a href="/kebabs" class="back"> <- Back to all pizzas </a>       
@endsection
 
