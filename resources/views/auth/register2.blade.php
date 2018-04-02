@extends('layouts.app1')

@section('content')

<section id="admin">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">REGISTER</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>

          <form method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <input id="name" type="text" class="form-control" placeholder="Name" value="{{ old('name') }}" >
                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <input id="email" type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" required>
                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
              </div>

              <div class="form-group">
                      <input id="password-confirm" type="password"placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
              </div>

              <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-xl text-uppercase">
                          Register
                      </button>
                  </div>
              </div>
          </form>
        </div>

        <div class="row">
          <div class="col-lg-12">

          </div>
        </div>
      </div>

    </div>
</section>
@endsection
