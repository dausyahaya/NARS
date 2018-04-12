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
  $('#quantity-table').DataTable();
});
</script>

    <section id="admin">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">ADD STORE</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="registerForm" method="POST" action="{{URL('/addstore')}}">
                {{ csrf_field() }}
              <div class="row">
                  <div class="form-group">
                    <input class="form-control" id="storeid" name="store_id" type="text" placeholder="Store ID">
                    <p></p>
                    <input class="form-control" id="storename" name="store_name" type="text" placeholder="Store Name">
                    <p></p>
                    <input class="form-control" id="storeemail" name="store_email" type="email" placeholder="Store Email">
                    <p></p>
                    <input class="form-control" id="storepassword" name="store_password" type="password" placeholder="Store Password">
                    <p></p>
                    <input class="form-control" id="usertype" name="usertype" type="hidden" value="store">
                  </div>


                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="addStore" class="btn btn-primary btn-xl text-uppercase" type="submit">ADD</button>
                </div>
              </div>
            </form>
          </div>

          <div class="container">
          <div class="col-lg-12">
            <form id="promoForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="wrapper" style="background:#fff;margin: 0 auto;">
                    <table class="table table-striped sumtable" id='quantity-table'>
                      <thead>
                        <tr>
                          <th>NO</th>
                          <th style="width=300px">Store ID</th>
                          <th style="width=300px">Store Name</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- <tr>
                          <td>1</td>
                          <td><a href='{{ URL::to("/summarytable")}}'>Sample Name</a></td>
                        </tr> -->
                        @foreach($Store as $index => $row)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$row->Store}}</td>
                                <td>{{$row->Name}}</td>
                            </tr>
                        @endforeach



                      </tbody>
                    </table>
                  </div>


                </div>
              </form>
            </div>
          </div>

        </br></br>
        &nbsp;

            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <a href='{{ URL::to("/catredeemsummary")}}'><button id="backbutton" class="btn btn-primary btn-xl text-uppercase" type="button">BACK</button></a>
            </div>
          </div>
        </div>
      </section>

@endsection
