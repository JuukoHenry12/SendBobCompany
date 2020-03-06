@extends('layouts.main')
@section('content')

<header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-6 m-auto">
          <div class="header-content mx-auto">

            <div class="">
                <h1 class="text-center mb-5">Edit Farmer</h1>
                <form action="{{route('farmers.update',$farmer->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    @include('farmer.form')


                </form>

            </div>


          </div>
        </div>
      </div>
    </div>
  </header>
@endsection
