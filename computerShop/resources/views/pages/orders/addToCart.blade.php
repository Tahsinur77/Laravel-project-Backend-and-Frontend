@extends('Layouts.orders')
@section('cart')
  
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
                <input class="quantity bg-light" id="quantity" min="1" max = "{{$product->pQuantity}}" placeholder="1" name="quantity" value="1" type="number">
            </td>
            <td>{{$product->pPrice}}</td>
            <td> <a class="btn btn-danger btn_remove" href="/proRemove/{{$x}}">X</a</td>
            
            @php($x++)

          </tr>

        @endforeach
    
    </table>


  <div class="d-grid gap-4 col-2 mx-auto">
    <a class="btn btn-primary me-md-2" href="">Order</a>
  </div>

  



@endsection