@extends('Layouts.app')

@section('unsoldOrderDetails')

  <table class="table table-bordered">
    <tr>
      <th>Product Name</th>
      <th>Picture</th>
      <th>Order Quality</th>
      <th>Avaiable Quantity</th>
    </tr>
    @foreach($orderDetails as $od)
      <tr>
        <td>{{$od->product->pName}}</td>
        <!-- <td>"<?php echo asset("storage/uploads/{$od->product->pPicture}")?>"</td> -->
        <td><img width="100px" height="100px" src=<?php echo asset("storage/uploads/{$od->product->pPicture}")?>></td>
        <td>{{$od->orderQuantity}}</td>
        <td>{{$od->product->pQuantity}}</td>
      </tr>
    @endforeach
  </table>

  <div class="d-grid gap-2 col-4 mx-auto">
        <!-- <input class="btn btn-success" type="submit" value="Submit"> -->
      <a href="/sell/{{$orderId}}" class="btn btn-success">Sell</a>
  </div>

@endsection