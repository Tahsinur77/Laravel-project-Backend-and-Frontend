<table class="table table-borded">
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
                <td>{{$customer->name}}</td>
                <td>{{$customer->pNumber}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->dob}}</td>
                <td><a href=>Edit</a></td>
            </tr>
        @endforeach
    </table>