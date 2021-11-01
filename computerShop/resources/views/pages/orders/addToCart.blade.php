@extends('Layouts.orders')
@section('cart')
  <form action="{{route('place.order')}}" method = "post">
    {{csrf_field()}}

    @if(Session::has('lists'))
        <table class="table table-borded">

            <tr>
                <th>Image</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Remove</th>
            </tr>

          @foreach($cart as $product)
            <tr>
              <td><img src="{{asset($product->pPicture)}}" alt="" width="80" height = "80"></td>
              <td>{{$product->pName}}</td>

              <td>
                  <input class="quantity bg-light" id="quantity" name="quantity[{{$x}}]" min="1" max = "{{$product->pQuantity}}" placeholder="1"  value="1" type="number">
              </td>
              <td>{{$product->pPrice}}</td>
              <td> <a class="btn btn-danger btn_remove" href="/proRemove/{{$x}}">X</a</td>
              
              @php($x++)

            </tr>

          @endforeach
      
      </table>


    @else

      <h2>Nothing</h2>

    @endif


    <div class="d-grid gap-4 col-2 mx-auto">
      <input class="btn btn-primary me-md-2" type="submit" value="Order">
      <!-- <a class="btn btn-primary me-md-2" href="/placeOrder">Order</a> -->
    </div>
  </form>

  



@endsection