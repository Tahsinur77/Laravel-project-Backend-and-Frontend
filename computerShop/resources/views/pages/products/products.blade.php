@extends('Layouts.app')
@section('products')

<div class="row">
  @foreach($products as $product)
  <div class="col-sm-3">
    <a href="/productDetails/{{$product->id}}">
      <div class="card" style="width: 20rem, height: 6rem;">
        <img class="card-img-top" src="{{asset($product->pPicture)}}" width="200" height="300">

        <div class="card-body">
          <h5 class="card-title">{{$product->pName}}</h5>
        </div>

        <ul class="list-group list-group-flush">
          @foreach($product->miniSpecifications as $model)
            <li class="list-group-item">{{$model}}</li>
          @endforeach
        </ul>

        <div class="card-body">
          <a href="/addtoCart/{{$product->id}}" class="btn btn-primary">Add to Cart</a>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>

      </div>
    </a>
  </div>
  
  
  @endforeach
</div>

@endsection