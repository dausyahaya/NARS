@extends('layouts.app1')
@section('head')
<style>

</style>
@endsection

@section('content')

<section id="admin">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Congratulations!</h2>
        <h3 class="section-subheading text-muted">You have successfully change the redempt method!</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <form id="contactForm" name="sentMessage" novalidate>
          <div class="row">
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success" style="padding-top:70px;"></div>
              <a href='{{ URL::to("/redemptmethod")}}'><button id="dashboard" class="btn btn-primary btn-xl text-uppercase" type="button">Back</button></a>
              <a href='{{ URL::to("/home")}}'><button id="dashboard" class="btn btn-primary btn-xl text-uppercase" type="button">Dashboard</button></a>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
