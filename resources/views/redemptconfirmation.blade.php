@extends('layouts.app1')

@section('content')
<section id="admin">
<div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Congratulations!</h2>
        <h3 class="section-subheading text-muted">You have successfully redempt!</h3>
      </div>
    </div>
    <div class="col-lg-12 text-center">
      <div id="success"></div>
      <a href='{{ URL::to("/home")}}'><button id="backbutton" class="btn btn-primary btn-xl text-uppercase" type="button">BACK</button></a>
    </div>
</div>
</section>
@endsection