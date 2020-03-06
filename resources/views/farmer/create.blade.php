@extends('layouts.main')
@section('content')

<header class="farmers">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-6 m-auto">
          <div class="header-content mx-auto">

            <div class="">
                @auth
                <h1 class="text-center mb-5" style="color:#fff">Register Farmer</h1>
                @else
                <h1 class="text-center mb-5">Join as Farmer</h1>
                @endauth

                <form action="{{route('farmers.store')}}" method="post">
                    @csrf
                    @include('farmer.form')

                </form>
            </div>


          </div>
        </div>
      </div>
    </div>
  </header>
@endsection
