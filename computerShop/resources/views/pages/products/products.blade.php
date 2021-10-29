@extends('Layouts.app')
@section('products')

  {{$pname}}



  @foreach($specification as $x => $x_value)

  <p>{{$x}} {{$x_value}}</p>

  <br>
  
  @endforeach

@endsection