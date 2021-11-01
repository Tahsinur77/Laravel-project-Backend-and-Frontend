@extends('Layouts.showList')
@section('content')
<div class="container">
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Salary</th>
            <th>Date of birth</th>
            <th></th>
        </tr>
        @foreach($employees as $employee)
        <tr>
            <td>{{$employee->eName}}</td>
            <td>{{$employee->empType}}</td>
            <td>{{$employee->pNumber}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->address}}</td>
            <td>{{$employee->eSalary}}</td>
            <td>{{$employee->dob}}</td>
            <td><a href="/employee/edit/{{$employee->id}}/{{$employee->eName}}">Edit</a></td>
            <td><a href="/employee/delete/{{$employee->id}}/{{$employee->eName}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection