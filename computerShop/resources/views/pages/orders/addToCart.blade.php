@extends('Layouts.orders')
@section('cart')
  
    <table class="table table-borded">

          <tr>
              <th>Product Id</th>
              <th>Name</th>
              <th>price</th>
              <!-- <th>quantity</th>
              <th>description</th> -->

              <th></th>
          </tr>

        @foreach($cart as $product)
          <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->pName}}</td>
            <td>{{$product->pPrice}}</td>
          </tr>
        @endforeach
    
    </table>


  <div class="d-grid gap-4 col-2 mx-auto">
    <a class="btn btn-primary me-md-2" href="">Order</a>
  </div>

  



@endsection