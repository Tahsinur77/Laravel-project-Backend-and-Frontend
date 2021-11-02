@extends('Layouts.app')
@section('contact')
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{asset('/storage/uploads/empDash/OrderHistory.png')}}" alt="..." />
                    <div class="card-body p-4">
                        <div class="text-center">
                        </div>
                    </div>

                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('myorders')}}">Oders History</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{asset('/storage/uploads/empDash/profile.png')}}" alt="..." />
          
                    <div class="card-body p-4">
                        <div class="text-center">
                        </div>
                    </div>
   
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/customer/edit/{{session('customerId')}}/{{session('name')}}">Update profile</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection