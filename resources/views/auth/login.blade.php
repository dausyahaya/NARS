@extends('layouts.app1')

@section('content')

    <!-- Contact -->
    <section id="admin">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">LOGIN</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form name="sentMessage" method="POST" action="{{ route('login') }}" novalidate>
              {{ csrf_field() }}

              <div class="row">
                  <div class="form-group">
                    <input class="form-control" id="storeID" name="email" type="text" placeholder="Store ID *" required data-validation-required-message="Please enter store id.">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <input class="form-control" id="password" name="password" type="password" placeholder="Password *" required data-validation-required-message="Please enter your password.">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>


                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <button id="StoreLogIn" class="btn btn-primary btn-xl text-uppercase" type="submit">LOGIN</button>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>

@endsection
