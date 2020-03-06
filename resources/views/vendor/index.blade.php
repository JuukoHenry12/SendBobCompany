@extends('layouts.main')
@section('content')

<section class="login">
    <div class="container h-100 ">
      <div class="row h-100">
        <div class="col-xl-12 m-auto">
          <div class="mx-auto">
            <div class="row">
                <a href="{{route('vendors.create')}}" class="btn btn-warning">Add Vendor</a>
            </div>
            <div class="">
                <h1 class="text-center mb-5" style="color:#fff">All Vendors</h1>

                @include('vendor.table')

            </div>


        </div>
      </div>
    </div>
  </div>

</section>

@endsection
