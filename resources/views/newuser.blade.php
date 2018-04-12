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
                    <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
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
      </br>

      <div class="container">
      <div class="col-lg-12">
        <form id="promoForm" name="sentMessage" novalidate>
          <div class="row">
            <div class="wrapper" style="background:#fff;margin: 0 auto;">
                <table class="table table-striped sumtable" id='quantity-table'>
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th style="width=300px">Name</th>
                        <th style="width=300px">Email</th>
                        <th style="width=300px">User Type</th>
                        <th style="width=300px">Date Created</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- <tr>
                        <td>1</td>
                        <td><a href='{{ URL::to("/summarytable")}}'>Sample Name</a></td>
                      </tr> -->
                      @foreach($users as $index => $row)
                          <tr>
                              <td>{{$index +1}}</td>
                              <td>{{$row->name}}</td>
                              <td>{{$row->email}}</td>
                              <td>{{$row->usertype}}</td>
                              <td>{{$row->created_at}}</td>
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
            <a href='{{ URL::to("/home")}}'><button id="backbutton" class="btn btn-primary btn-xl text-uppercase" type="button">BACK</button></a>
          </div>
        </div>
      </div>
    </section>

    <script>

            function checkPasswordMatch() {
            var password = $("#password").val();
            var confirmPassword = $("#password-confirm").val();

            if (password != confirmPassword)
                $("#divCheckPasswordMatch").html("Passwords do not match!");
            else
                $("#divCheckPasswordMatch").html("Passwords match.");
        }

        $(document).ready(function () {
           $("#password-confirm").keyup(checkPasswordMatch);
        });

    </script>

  @endsection
