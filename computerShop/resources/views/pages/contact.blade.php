@extends('Layouts.app')
@section('contact')


<div class="card">
  <div class="card-body">
      @foreach($contact as $x)
          {{$x}}<br>
      @endforeach
  </div>
</div>

@endsection