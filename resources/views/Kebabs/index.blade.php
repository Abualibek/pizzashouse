@extends('layouts.app')

@section('content')



<div class="wrapper pizza-index">
    <h1>Kebabs Orders</h1>
        @foreach($kebabs as $kebab)
                <div>
                   <h4><a href="/kebabs/{{$kebab->id}}">{{ $kebab->name }}</a></h4>
                </div>
        @endforeach  

</div>
        

@endsection
 
