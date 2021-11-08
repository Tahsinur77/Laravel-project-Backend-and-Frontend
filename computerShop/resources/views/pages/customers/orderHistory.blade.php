@extends('Layouts.app')

@section('orderDetails')


<h1>Order Details History</h1>
@foreach($orders as $order)

    <h4>Order Id: {{$order->id}}</h4>
    <h4>Order Status: {{$order->status}}</h4>
    <h5>Order Details </h5>
    <table class="table table-bordered">
        <tr>
            <td>Name</td>
            <td>Image</td>
            <td>Unit Price</td>
            <td>Order Quantity</td>
            <td>Total Price</td>
        </tr>
        @foreach($order->orderDetail as $od)
            <tr>
                <td>{{$od->product->pName}}</td>
                <!-- <td>{{$od->product->pPicture}}</td> -->
                <td><img width="100px" height="100px" src="storage/uploads/{{$od->product->pPicture}}"></td>
                <td>{{$od->product->pPrice}}</td>
                <td>{{$od->orderQuantity}}</td>
                <td>{{$od->totalPrice}}</td>
            </tr>
        @endforeach
    </table>


@endforeach




@endsection