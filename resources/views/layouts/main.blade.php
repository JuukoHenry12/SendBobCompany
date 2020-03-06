<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Farmers') }}</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{asset('js/app.js')}}"></script>


  <!-- Bootstrap core CSS -->
  {{-- <link href="{{asset('dist/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> --}}

  <!-- Custom fonts for this template -->
  <link href="{{asset('dist/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('dist/vendor/simple-line-icons/css/simple-line-icons.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

  <!-- Plugin CSS -->
  {{-- <link rel="stylesheet" href="device-mockups/device-mockups.min.css')}}"> --}}

  <!-- Custom styles for this template -->
  <link href="{{asset('dist/css/new-age.css')}}" rel="stylesheet">

</head>

<body id="page-top">


    @include('layouts.navbar')

    @yield('content')
    @include('layouts.footer')



  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('dist/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('dist/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('dist/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('dist/js/new-age.min.js')}}"></script>
   <script src="{{asset('dist/js/typed.js')}}"></script>
<script src="{{asset('dist/js/index.js')}}"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</body>

</html>
