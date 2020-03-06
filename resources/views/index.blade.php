@extends('layouts.main')
@section('content')
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">

               <div id="page_wrap">
                   <div class="banner">
                    <div class="typed_wrap">
                    <h2 style="color:#fff"><span class="typed"></span></h2>
                </div>
              </div>
            </div>

            <img src="{{asset('dist/img/sendBob.png')}}" class="img-fluid" alt="" width="70%" height="20%"/>
          </div>
        </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">

      </div>
    </div>
  </header>

  <section class="download  text-center login " id="download" >
    <div class="container">
        <div class="mx-auto">
          <h3 style="color:#fff">What we do ?</h3>
          <hr>
              <p>SendBob Connects Village Brokers and vendors/Customers to efficient, transparent, fair, trusted formal urban markets using USSD
        </div>

         <h3 style="color:#fff">VILLLAGE BROKER</h3>
        <div class="row mx-auto">
            <div class="col-4">
              <div class="card">
                  <div class="card-header">
                    <h3> Guaranted markets</h3>
              </div>
              <div class="card-body">
                   <img src="{{asset('dist/img/Payment.jpg')}}" class="img-fluid " alt="" width="50%" height="50%"/>
                 </div>
              </div>
            </div>

            <div class="col-4">
              <div class="card">
                <div class="card-header">
                    <h3>Better Price</h3>
                </div>
                <div class="card-body">
                      <img src="{{asset('dist/img/Phone.png')}}" class="img-fluid" alt="" width="50%" height="50%"/>
                    </div>
                </div>
            </div>

            <div class="col-4">
              <div class="card">
                <div class="card-header">
                   <h3> Reliable Market</h3>
                </div>
                <div class="card-body">
                      <img src="{{asset('dist/img/Phone.png')}}" class="img-fluid" alt="" width="50%" height="50%"/>
                </div>
            </div>
            </div>
        </div>

        <h3 style="color:#fff">Vendors</h3>
         <div class="row mx-auto">

            <div class="col-4">
              <div class="card">
                <div class="card-header">
                    <h3 class="text-center"> Online Payment</h3>
                </div>
                <div class="card-body">
                   <img src="{{asset('dist/img/Payment.jpg')}}" class="img-fluid" alt="" width="50%" height="50%"/>
                </div>
            </div>
        </div>

        <div class="col-4">
          <div class="card">
            <div class="card-header">
              <h3>online presence</h3>
            </div>
             <div class="card-body">
                <img src="{{asset('dist/img/Phone.png')}}" class="img-fluid" alt="" width="50%" height="50%"/>
                </div>
              </div>
            </div>

            <div class="col-4">
              <div class="card">
                <div class="card-header">
                    <h3> Guaranted markets</h3>

                </div>
                <div class="card-body">
                    <img src="{{asset('dist/img/Phone.png')}}" class="img-fluid" alt="" width="50%" height="50%"/>
                  </div>

              </div>
            </div>
        </div>
    </div>
  </section>


<section class="features  bg-primary" id="features">
    <div class="container">
      <div class="section-heading text-center" >
        <h2  style="color:aliceblue">How it Works</h2>
        <hr>
      </div>
        <div class="section1">

        <p>you get to register with sendBob</p>
        </div>
         <div>
            <p>you give us the location of the produce</p>
        </div>
         <div>
            <p>we Deliver the produce to the Nakasera store</p>
        </div>
         <div>
            <p>Add produce to the sendBob USDD</p>
        </div>
        </div>
    </div>
    <div class="section2">
        <p>Benefits</p>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="container">
        <div class="row">
        <div class="col-6">
            <h2>location</h2>
            <div class="address">
            <address>Adress :kampala something </address>
            <p>Telephone:0786883492</p>

            </div>
        </div>

        <div class="col-6">
            <h3>To Registrate as a Farmer click the here</h3>
           <button class="btn btn-primary btn-lg btn-block" id="button b"><a href="{{route('farmers.create')}}">Farmers</a></button>

            <h3>To Registrate as a vendor click the here</h3>
           <button class="btn btn-warning btn-lg btn-block"> <a href="{{route('vendors.create')}}">Vendors</a></button>


        </div>


        </div>

           <div class="row">
            <div class="col-6">

                 <h3 class="justify-center">Collection Centers For Farmers </h3>
                  <hr/>
                 <address>North Rift: Baringo (Equator, Mogotio)</address>
                 <address>North Rift: Baringo (Equator, Mogotio)</address>
                 <address>North Rift: Baringo (Equator, Mogotio)</address>
            </div>
            <div class="col-6">
                <h3 class="justify-center">Collection Centers For vendors </h3>
                 <hr/>
                 <address>North Rift: Baringo (Equator, Mogotio)</address>
                 <address>North Rift: Baringo (Equator, Mogotio)</address>
                 <address>North Rift: Baringo (Equator, Mogotio)</address>
            </div>
        </div>
  </div>
</section>
@endsection
