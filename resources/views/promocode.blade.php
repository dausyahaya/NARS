@extends('layouts.app1')

@section('content')

<section id="store">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">PROMO CODE</h2>
        <h3 class="section-subheading text-muted">{{$store->name}}
          <body onload="startTime()">
            <div id="txt"></div>
          </body>
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form id="promoForm" name="sentMessage" novalidate>
          <div class="row">
              <div class="form-group">
                <input class="form-control" id="promocode" type="text" placeholder="Promo Code *" required data-validation-required-message="Please enter your promocode.">
                <p class="help-block text-danger"></p>
              </div>


            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button id="validateButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Validate</button>
              <!-- <h3 class="section-subheading text-muted"><a href='{{ URL::to("/redemptmethod")}}'>SKIP</a></h3> -->
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
