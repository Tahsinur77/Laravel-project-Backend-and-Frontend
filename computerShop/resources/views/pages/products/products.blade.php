@extends('Layouts.app')
@section('products')

  {{$pname}}
  {{$count}}

  @foreach($specification as $x)

  {{$x}}
  
  @endforeach

@endsection