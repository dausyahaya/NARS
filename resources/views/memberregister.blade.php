@extends('layouts.app1')

@section('content')

<section id="store">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">REGISTER</h2>
        <h3 class="section-subheading text-muted">{{$store->name}}
          <body onload="startTime()">
            <div id="txt"></div>
          </body>
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form id="registerForm" method="POST" action="{{URL('/memberregister1')}}">
            {{ csrf_field() }}
          <div class="row">
              <div class="form-group">
                <input class="form-control" id="firstname" name="firstname" type="text" placeholder="First Name *" >
                <p class="help-block text-danger"></p>
                <input class="form-control" id="lastname" name="lastname" type="text" placeholder="Last Name *" >
                <p class="help-block text-danger"></p>
                <input class="form-control" id="IC_No" type="text" name="IC_No" placeholder="IC Number *" >
                <p class="help-block text-danger"></p>
                <input class="form-control" id="DOB" type="date" name="DOB" placeholder="Date of Birth *" >
                <p class="help-block text-danger"></p>
                <input class="form-control" id="email" type="email" name="Email" placeholder="E-mail *" >
                <p class="help-block text-danger"></p>
                <input class="form-control" id="contactnumber" type="text" name="Contact_No" placeholder="Contact Number *" >
                <p class="help-block text-danger"></p>
              </div>


            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button id="registerButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
