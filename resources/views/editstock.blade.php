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
function readURL(input) {
  if (input.files && input.files[0]) {
  var reader = new FileReader();

  reader.onload = function (e) {
      $('#product_image')
          .attr('src', e.target.result)
  };

  reader.readAsDataURL(input.files[0]);
}
}
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
        <form enctype="multipart/form-data" method="POST" action="{{URL('/editstock')}}">
          <div class="row">
              <div class="form-group">
                  {{ csrf_field() }}
                <input class="form-control"  value="{{$data->DCS_CODE}}" type="text" name="DCS_Code" placeholder="DCS Code *" required data-validation-required-message="Please enter DCS Code.">
                <p class="help-block text-danger"></p>
                <input class="form-control"  value="{{$data->ALU}}" type="text" name="ALU" placeholder="ALU *" required data-validation-required-message="Please enter ALU.">
                <p class="help-block text-danger"></p>
                <input class="form-control"  value="{{$data->UPC}}" type="text" name="UPC" placeholder="UPC *" required data-validation-required-message="Please enter UPC.">
                <p class="help-block text-danger"></p>
                <input class="form-control"  value="{{$data->Name}}" type="text" name="itemname" placeholder="Product Name *" required data-validation-required-message="Please enter product name.">
                <p class="help-block text-danger"></p>
                <input class="form-control"  value="{{$data->Quantity}}" type="number" name="quantity" placeholder="Quantity *" required data-validation-required-message="Please enter quantity.">
                <p class="help-block text-danger"></p>
                
                <input class="form-control" id="store_id" name="store_id" value="" type="hidden">

                <img id="product_image" src="{{Url($data->Web_Path)}}"  width="200px" height="200px"/>
                <input type="file" name="stock_img" onchange="readURL(this);" />
              </div>


            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>

              <button id="stockButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Edit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    
</section>
@endsection
