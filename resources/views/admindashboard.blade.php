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

<section id="admin">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <form id="contactForm" name="sentMessage" novalidate>
          <div class="row">

            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <a href='{{ URL::to("/newuser")}}'><button id="user" class="btn btn-primary btn-xl text-uppercase" type="button" style="width:300px;height:200px">USER</button></a>
              <a href='{{ URL::to("/setting")}}'><button id="setting" class="btn btn-primary btn-xl text-uppercase" type="button" style="width:300px;height:200px">SETTING</button></a>
              <a href='{{ URL::to("/availablesummary")}}'><button id="summary" class="btn btn-primary btn-xl text-uppercase" type="button" style="width:300px;height:200px">SUMMARY</button></a>
              <a href='{{ URL::to("/stock")}}'><button id="stock" class="btn btn-primary btn-xl text-uppercase" type="button" style="width:300px;height:200px">STOCK</button></a>
              <a href='{{ URL::to("/newstore")}}'><button id="store" class="btn btn-primary btn-xl text-uppercase" type="button" style="width:300px;height:200px">STORE</button></a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
