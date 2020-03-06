@extends('layouts.main')
@section('content')

<header class="vendors">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-6 m-auto">
          <div class="header-content mx-auto">

            <div class="">
                @auth
                <h1 class="text-center mb-5">Register Vendor</h1>
                @else
                <h1 class="text-center mb-5">Join as Vendor</h1>
                @endauth
                <form action="{{route('vendors.store')}}" method="post">
                    @csrf
                    @include('vendor.form')

                </form>
            </div>


          </div>
        </div>
      </div>
    </div>
  </header>
@endsection
