@extends('Layouts.showList')
@section('content')
<div class="container">
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Date of birth</th>
            <th></th>
        </tr>
        @foreach($customers as $customer)
        <tr>
            <td>{{$customer->cName}}</td>
            <td>{{$customer->pNumber}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->dob}}</td>
            <td><a href="/customer/edit/{{$customer->id}}/{{$customer->cName}}">Edit</a></td>
            <td><a href="/customer/delete/{{$customer->id}}/{{$customer->cName}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection