@extends('layouts.app1')

@section('content')

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">STORE LOGIN</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                  <div class="form-group">
                    <input class="form-control" id="storeID" type="text" placeholder="Store ID *" required data-validation-required-message="Please enter store id.">
                    <p class="help-block text-danger"></p>
                    <input class="form-control" id="password" type="password" placeholder="Password *" required data-validation-required-message="Please enter your password.">
                    <p class="help-block text-danger"></p>
                  </div>


                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">LOGIN</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

@endsection
