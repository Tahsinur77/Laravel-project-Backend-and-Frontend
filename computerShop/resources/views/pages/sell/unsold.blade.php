@extends('Layouts.app')

@section('unsold')
  <table class="table table-borded">

  <tr>
    <th>Order By</th>
    <th>Status</th>
    <th>Order Details</th>
    <th>Sell</th>
  </tr>

  
  @foreach($unsolds as $unsold)
    <tr>
      <td>{{$unsold->customer->cName}}</td>
      <td>{{$unsold->status}}</td>
      <td>
        <a href="/unsold/orderDetails/{{$unsold->id}}" data-toggle="modal" data-target="#addConference" class="btn btn-info">Details</a>
        <!-- <table class="table table-borded">
              @foreach($unsold->orderDetail as $od)
                <td>{{$od->product->pName}}</td>
                <td>{{$od->product->pPicture}}</td>
                <td>{{$od->orderQuantity}}</td>
                <td>{{$od->product->pQuantity}}</td>
              @endforeach
        </table> -->
      </td>
      <td>
        <a href="/sell/{{$unsold->id}}" class="btn btn-success">Sell</a>
      </td>
    </tr>
  @endforeach

    
  </table>
  

@endsection