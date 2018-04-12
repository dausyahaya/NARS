@extends('layouts.app1')

@section('content')

    <section id="admin">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">EDIT STORE</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="registerForm" method="POST" action="{{URL('/editstore')}}">
                {{ csrf_field() }}
              <div class="row">
                  <div class="form-group">
                    <input class="form-control" id="storeid" value="{{$data->Store}}" name="store_id" type="text" placeholder="Store ID">
                    <p></p>
                    <input class="form-control" id="storename" value="{{$data->Name}}" name="store_name" type="text" placeholder="Store Name">
                    <p></p>
                    <input class="form-control" id="usertype" name="usertype" type="hidden" value="store">
                  </div>
                  <input type="hidden" name="id" value="{{$data->Store}}">

                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="addStore" class="btn btn-primary btn-xl text-uppercase" type="submit">Edit</button>
                </div>
              </div>
            </form>
          </div>


        </div>
      </div>
 </section>

@endsection
