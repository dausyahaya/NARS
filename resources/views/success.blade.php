@extends('layouts.app1')
@section('head')
<style>

</style>
@endsection

@section('content')

<section id="store">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Congratulations!</h2>
        <h3 class="section-subheading text-muted">You are now successfully registered as member. Login now to redempt.</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <form id="contactForm" name="sentMessage" novalidate>
          <div class="row">
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success" style="padding-top:70px;"></div>
              <a href='{{ URL::to("/memberlogin")}}'><button id="memberlogin" class="btn btn-primary btn-xl text-uppercase" type="button">Login</button></a>


            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
