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

<section id="admin">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">SUMMARY TABLE</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form id="promoForm" name="sentMessage" novalidate>
          <div class="row">
            <div class="wrapper" style="background:#fff;margin: 0 auto;">
                <table class="table table-striped sumtable">
                  <thead>
                    <tr>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Email</th>
                      <th>Title</th>
                      <th>Title</th>
                      <th>Title</th>
                      <th>Title</th>
                      <th>Title</th>
                      <th>Title</th>
                      <th>Title</th>
                      <th>Title</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>John</td>
                      <td>Doe</td>
                      <td>john@example.com</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                    </tr>
                    <tr>
                      <td>Mary</td>
                      <td>Moe</td>
                      <td>mary@example.com</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                    </tr>
                    <tr>
                      <td>July</td>
                      <td>Dooley</td>
                      <td>july@example.com</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                    </tr>
                    <tr>
                      <td>July</td>
                      <td>Dooley</td>
                      <td>july@example.com</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                    </tr>
                    <tr>
                      <td>July</td>
                      <td>Dooley</td>
                      <td>july@example.com</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                    </tr>
                    <tr>
                      <td>July</td>
                      <td>Dooley</td>
                      <td>july@example.com</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                    </tr>
                    <tr>
                      <td>July</td>
                      <td>Dooley</td>
                      <td>july@example.com</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                      <td>Text</td>
                    </tr>

                  </tbody>
                </table>
            </div>


          </div>
        </form>
      </div>

      <div class="col-lg-12 text-center">
        <div id="success"></div>
        <a href='{{ URL::to("/availablesummary")}}'><button id="backbutton" class="btn btn-primary btn-xl text-uppercase" type="button">BACK</button></a>
      </div>
    </div>
  </div>
</section>

@endsection
