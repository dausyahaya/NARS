@extends('layouts.app1')

@section('content')

    <!-- Contact -->
    <section id="admin">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">ADD USER</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="registerForm" method="POST" action="{{URL('/adduser')}}">
                {{ csrf_field() }}
              <div class="row">
                  <div class="form-group">
                    <input class="form-control" id="username" name="username" type="text" placeholder="Name">
                    <p></p>
                    <input class="form-control" id="useremail" name="useremail" type="email" placeholder="User Email">
                    <p ></p>
                    <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                    <p></p>
                    <input class="form-control" id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                    <p></p>
                    <input class="form-control" id="usertype" name="usertype" type="hidden" placeholder="User Type" value="admin">
                    <p></p>
                  </div>


                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">CREATE USER</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

@endsection
