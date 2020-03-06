@extends('layouts.main')
@section('content')

 <section class="bg-danger">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-6 m-auto">
          <div class="header-content mx-auto">

            <div class="">
                <h1 class="text-center mb-5">Edit Vendor</h1>
                <form action="{{route('vendors.update',$vendor->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    @include('vendor.form')

                </form>
            </div>


          </div>
        </div>
      </div>
    </div>
 </section>


@endsection
