@extends('layouts.app1')

@section('content')

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

        <div class="col-lg-12">
          <form id="" name="">
            <div class="row">
              <div class="wrapper" style="overflow-x:scroll;overflow-y:scroll;background:#fff;margin: 0 auto;">
                  <table class="table table-striped sumtable" style="width:800px;">
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
    </section>

@endsection
