@extends('layouts.app1')
@section('head')
<style>
.btn-xl {
    font-size: 18px;
    padding: 20px 40px;
    margin: 10px;
}
</style>
@endsection

@section('content')
<section id="store">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <form id="contactForm" name="sentMessage" novalidate>
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">WELCOME</h2>
              <h3 class="section-subheading text-muted">{{$store->name}}

                <body onload="startTime()">
                  <div id="txt"></div>
                </body>
              </h3>

            </div>
          </div>
          <div class="row">

            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success" style="padding-top: 70px;"></div>
              <a href='{{ URL::to("/memberlogin")}}'><button id="member" class="btn btn-primary btn-xl text-uppercase" type="button" style="width:300px;height:200px">Member</button></a>
              <a href='{{ URL::to("/memberregister")}}'><button id="newmember" class="btn btn-primary btn-xl text-uppercase" type="button" style="width:300px;height:200px">New Member</button></a>

            </div>
          </div>

        </form>
        <div class="col-lg-12 text-center">
        </br>
        <a href='{{ URL::to("/home")}}'>BACK</a>
      </div>
      </div>
    </div>
  </div>
</section>


@endsection
