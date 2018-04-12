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
            <form id="registerForm" method="POST" action="{{URL('/edituser')}}">
                {{ csrf_field() }}
              <div class="row">
                  <div class="form-group">
                    <input class="form-control" id="username" value="{{$display->name}}" name="username" type="text" placeholder="Name">
                    <p></p>
                    <input class="form-control" id="useremail" value="{{$display->email}}" name="useremail" type="email" placeholder="User Email">
                    <p></p>
                    <input class="form-control" id="usertype" name="usertype" type="hidden" placeholder="User Type" value="admin">
                    <p></p>
                    <input type="hidden" name="id" value="{{$display->id}}">
                  </div>


                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Edit</button>
                  <a href='{{ URL::to("/newuser")}}'><button id="backbutton" class="btn btn-primary btn-xl text-uppercase" type="button">BACK</button></a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </br>


      </br></br>
      &nbsp;

        </div>
      </div>
</section>

  @endsection
