@extends('layouts.app1')
@section('content')

<section id="store">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">IDENTITY CONFIRMATION</h2>
        <h3 class="section-subheading text-muted">{{$store->name}}

          <body onload="startTime()">
            <div id="txt"></div>
          </body>
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
          <div class="row">
              <div class="form-group" style="color:#fff;">
                @foreach ($member as $user)
                <center>
                  <b style="color:#dc3545">Name :</b><br/>
                  {{$user->First}} {{$user->Last}}<br/><br/>

                  <b style="color:#dc3545">Contact Number :</b><br/>
                  {{$user->Contact_No}}<br/><br/>

                  <b style="color:#dc3545">IC Number :</b><br/>
                  {{$user->IC_No}}<br/><br/>

                  <b style="color:#dc3545">Email :</b><br/>
                  {{$user->Email}}
                </center>
                @endforeach
              </div>

            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="Proceed"></div>
              <a href='{{ URL::to("/redemptgift")}}'><button id="ProceedButton" class="btn btn-primary btn-xl text-uppercase" type="button">Proceed</button></a>
              <br>
              <a href='{{ URL::to("/memberlogin")}}'>BACK</a>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

@endsection
