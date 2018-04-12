@extends('layouts.app1')

@section('head')
<style>
.sumtable{
  background-color:#fff;
  font-size: 12px;
  margin-left:15%;
  margin-right:15%;
  color:#fff;
  width:100%;
  height:300px;
}
table{
  background:#fff;
}
th, td {
    text-align: left;
    padding: 8px;
    background:#fff;
}
tr:nth-child(even){background-color: #f2f2f2}
</style>
@endsection

@section('content')
<script>
$(document).ready(function(){
  var table=$('#customer-table').DataTable();
});
</script>

<section id="admin">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">ADD NEW STOCK</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form enctype="multipart/form-data" method="POST" action="{{URL('/newstock')}}">
          <div class="row">
              <div class="form-group">
                  {{ csrf_field() }}
                <input class="form-control"  type="text" name="DCS_Code" placeholder="DCS Code *" required data-validation-required-message="Please enter DCS Code.">
                <p class="help-block text-danger"></p>
                <input class="form-control"  type="text" name="ALU" placeholder="ALU *" required data-validation-required-message="Please enter ALU.">
                <p class="help-block text-danger"></p>
                <input class="form-control"  type="text" name="UPC" placeholder="UPC *" required data-validation-required-message="Please enter UPC.">
                <p class="help-block text-danger"></p>
                <input class="form-control"  type="text" name="itemname" placeholder="Product Name *" required data-validation-required-message="Please enter product name.">
                <p class="help-block text-danger"></p>
                <input class="form-control"  type="number" name="quantity" placeholder="Quantity *" required data-validation-required-message="Please enter quantity.">
                <p class="help-block text-danger"></p>
                @foreach($users as $index => $row)
                <input class="form-control" id="store_id" name="store_id" value="{{$row->store_id}}" type="hidden">
                @endforeach
                <input type="file" name="stock_img" required/>
              </div>


            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>

              <button id="stockButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Receive</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="row">

      <div class="col-lg-12">
        <form id="promoForm" name="sentMessage" novalidate>
          <div class="row">
            <div class="wrapper" style="background:#fff;margin: 0 auto;">
              <table class="table table-striped sumtable" id="customer-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <!-- <th style="width=300px">Product Name</th> -->
                    <th>DCS Code</th>
                    <th>UPC</th>
                    <th>ALU</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Date Received</th>
                    <th>Image</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($stock as $index => $row)
                    <tr>
                      <td>{{$index +1}}</td>
                      <td>{{$row->DCS_Code}}</td>
                      <td>{{$row->UPC}}</td>
                      <td>{{$row->ALU}}</td>
                      <td>{{$row->Name}}</td>
                      <td>{{$row->Quantity}}</td>
                      <td>{{$row->create_dt}}</td>
                      <td><a href="http://localhost/NARS20180304/public{{ $row->Web_Path }}" target="_blank">
                          <img src="http://localhost/NARS20180304/public{{ $row->Web_Path }}" class="responsive" height="50" width="50"/>
                          </a></td>
                  @endforeach
                    </tr>
                  <!-- <tr>
                    <td>1</td>
                    <td>Sample Name</td>
                    <td>Sample</td>
                    <td><a href='{{ URL::to("/")}}'>View Image</a></td>
                  </tr> -->
                </tbody>
              </table>
          </div>
        </div>
    </div>
  </div>
</section>
@endsection
