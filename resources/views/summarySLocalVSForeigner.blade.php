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
  $('#customize-report').DataTable();
  });
</script>

<section id="admin">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">SALES SUMMARY</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">


      <!--5 - Redemption Customer Detail -->

      <div class="col-lg-12">
        <form id="promoForm" name="sentMessage" novalidate>
          <div class="row">
            <div class="wrapper" style="background:#fff;margin: 0 auto;">
                <center><h3>Customize Report (Local VS Foreigner)</h3></center>
                <table class="table table-striped sumtable" id='customize-report'>
                  <thead>
                    <tr>
                      <th>Num</th>
                      <th>Store Name</th>
                      <th>Local</th>
                      <th>Foreigner</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sales4 as $index => $row)
                    <tr>
                      <td>{{$index +1}}</td>
                      <td>{{$row->Name}}</td>
                      <td>{{$row->Local}}</td>
                      <td>{{$row->Foreigner}}</td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
            </div>


          </div>
        </form>
      </div>

    </br></br>
    &nbsp;

      <div class="col-lg-12 text-center">
        <div id="success"></div>
        <a href='{{ URL::to("/catsalessummary")}}'><button id="backbutton" class="btn btn-primary btn-xl text-uppercase" type="button">BACK</button></a>
      </div>
    </div>
  </div>
</section>

@endsection
