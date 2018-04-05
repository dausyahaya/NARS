@extends('layouts.app1')

@section('content')

<section id="store">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">MEMBER LOGIN</h2>
        <h3 class="section-subheading text-muted">{{$store->name}}

        <body onload="startTime()">
          <div id="txt"></div>
        </body>
      </h3>
      
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form id="memberForm" method="POST" action="{{URL('/redempt')}}"  style="color:#fff">
            {{ csrf_field() }}

          <center>
            @if (session('message'))
            {{session('message')}}
            @endif
          </center>

          <div class="row">
              <div class="form-group">
                <input class="form-control" id="ic_number" name="ic_number" type="text" placeholder="IC Number *">
                @if ($errors->has('ic_number'))
                    <span class="help-block">
                        <strong>{{ $errors->first('ic_number') }}</strong>
                    </span>
                @endif
                <center style="padding-bottom:10px;color:#fff;">OR</center>
                <input class="form-control" id="contact_number" name="contact_number" type="text" placeholder="Contact Number *">
                <p class="help-block text-danger"></p>
              </div>


            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button id="memberLoginButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Login</button>
              <br>
              <a href='{{ URL::to("/home")}}'>BACK</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
