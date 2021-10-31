
@extends('Layouts.app')
@section('productDetails')


  <img class="rounded mx-auto d-block" src="{{asset($productDetails->pPicture)}}" width="350" height="400">


  <br> <br> 

  <h3>Product Details</h3>
  <br>

  <div style = "table-layout:fixed; width:700px; margin-left:5%; ">
    <table class="table table-bordered">
      <tr >
        <td>Name</td>
        <td>{{$productDetails->pName}}</td>
      </tr>

      <tr>
        <td>Category</td>
        <td>{{$productDetails->pCategory}}</td>
      </tr>

      <tr>
        <td>Type</td>
        <td>{{$productDetails->pType}}</td>
      </tr>

      <tr>
        <td>Product Id</td>
        <td>{{$productDetails->pId}}</td>
      </tr>

      <tr>
        <td>Price</td>
        <td>{{$productDetails->pPrice}}</td>
      </tr>

      <tr>
        <td>Status</td>
        <td>{{$status}}</td>
      </tr>


    </table>

  </div>

  <br><br>
  <h3>Specification</h3>
  <br>

  <div style = "table-layout:fixed; width:700px; margin-left:5%; ">
    <table class="table table-bordered">
      <thead>
      </thead>
      <tbody>
        <tr>
          <th>Component</th>
          <th>Model</th>
        </tr>
        @foreach($productDetails->pSpecification as $com=>$model)
          <tr class="table-active">
              <td>{{$com}}</td>
              <td>{{$model}}</td>
          </tr>
        @endforeach

      </tbody>
  </table>
</div>

<br>
<div class="d-grid gap-2 col-4 mx-auto">
  <a class="btn btn-primary" href="/addtoCart/{{$productDetails->id}}">Add to Cart</a>
</div>




@endsection