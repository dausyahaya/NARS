@extends('layouts.app1')

@section('head')
@endsection

@section('content')

<section id="admin">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">REDEMPTION STOCK</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form method="POST" action="{{URL('/newstock')}}">
          <div class="row">
              <div class="form-group">
                <input class="form-control"  type="text" name="itemname" placeholder="Product Name *" required data-validation-required-message="Please enter product name.">
                <p class="help-block text-danger"></p>
                <input class="form-control"  type="text" name="quantity" placeholder="Quantity *" required data-validation-required-message="Please enter quantity.">
                <p class="help-block text-danger"></p>
              </div>


            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <input type="file" id="myFile">
              <button id="stockButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Receive</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="col-lg-12" style="padding-top:20px">
        <div class="row">
          <div class="wrapper" style="overflow-x:scroll;overflow-y:scroll;background:#fff;margin: 0 auto;">
              <table class="table table-striped sumtable" style="width:800px;">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th style="width=300px">Product Name</th>
                    <th>Quantity</th>
                    <th>Picture</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Sample Name</td>
                    <td>Sample</td>
                    <td><a href='{{ URL::to("/")}}'>View Image</a></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Sample Name</td>
                    <td>Sample</td>
                    <td><a href='{{ URL::to("/")}}'>View Image</a></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Sample Name</td>
                    <td>Sample</td>
                    <td><a href='{{ URL::to("/")}}'>View Image</a></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Sample Name</td>
                    <td>Sample</td>
                    <td><a href='{{ URL::to("/")}}'>View Image</a></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Sample Name</td>
                    <td>Sample</td>
                    <td><a href='{{ URL::to("/")}}'>View Image</a></td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
    </div>
  </div>
</section>


@endsection
