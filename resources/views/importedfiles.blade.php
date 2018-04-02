@extends('layouts.app1')
@section('head')
<style>
.sumtable{
  background-color:#fff;
  font-size: 12px;
  margin-left:15%;
  margin-right:15%;
  color:#fff;
float:left; margin-right:10px;
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

<section id="admin">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">IMPORTED FILES</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form id="" name="">
          <div class="row">
            <div class="wrapper" style="overflow-x:scroll;overflow-y:scroll;background:#fff;margin: 0 auto;">
                <table class="table table-striped sumtable" style="width:800px;">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th style="width=300px">File Name</th>
                      <th>By</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>File Name</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>File Name</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>File Name</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>File Name</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>File Name</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-12 text-center">
        <div id="success"></div>
        <a href='{{ URL::to("/home")}}'><button id="backbutton" class="btn btn-primary btn-xl text-uppercase" type="button">BACK</button></a>
      </div>
    </div>
  </div>
</section>

@endsection
