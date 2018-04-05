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
        <h2 class="section-heading text-uppercase">REDEMPTION SUMMARY</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">

      <div class="container">
      <div class="col-lg-12">
        <form id="promoForm" name="sentMessage" novalidate>
          <div class="row">
            <div class="wrapper" style="background:#fff;margin: 0 auto;">
                <center><h3>Redemption quantity by outlet (monthly, weekly, daily, YTD)</h3></center>
                <table class="table table-striped sumtable">
                  <thead>
                    <tr>
                      <th>Num</th>
                      <th>Store Name</th>
                      <th>Store</th>
                      <th>Redemption ALU</th>
                      <th>Redemption DCS</th>
                      <th>Redemption Quantity</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($redemption1 as $index => $row)
                    <tr>
                      <td>{{$index +1}}</td>
                      <td>{{$row->Name}}</td>
                      <td>{{$row->Store}}</td>
                      <td>{{$row->redemption_alu}}</td>
                      <td>{{$row->redemption_dcs}}</td>
                      <td>{{$row->total_quantity}}</td>
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

      <!--2 - Redemption Customer Report-->

      <div class="col-lg-12">
        <form id="redemption" name="sentMessage" novalidate>
          <div class="row">
            <div class="wrapper" style="background:#fff;margin: 0 auto;">
                <center><h3>Redemption Customer Report (Existing / New)</h3></center>
                <table class="table table-striped sumtable">
                  <thead>
                    <tr>
                      <th>Num</th>
                      <th>Store Name</th>
                      <th>Store</th>
                      <th>Cust Type</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($redemption2 as $index => $row)
                    <tr>
                      <td>{{$index +1}}</td>
                      <td>{{$row->Name}}</td>
                      <td>{{$row->Store}}</td>
                      <td></td>
                      <td></td>
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

      <!--3 - Redemption Item Report (quantity for each item) -->

      <div class="col-lg-12">
        <form id="promoForm" name="sentMessage" novalidate>
          <div class="row">
            <div class="wrapper" style="background:#fff;margin: 0 auto;">
                <center><h3>Redemption Item Report (quantity for each item)</h3></center>
                <table class="table table-striped sumtable">
                  <thead>
                    <tr>
                      <th>Num</th>
                      <th>Store Name</th>
                      <th>Store</th>
                      <th>Cust Type</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($redemption1 as $index => $row)
                    <tr>
                      <td>{{$index +1}}</td>
                      <td>{{$row->Name}}</td>
                      <td>{{$row->Store}}</td>
                      <td>{{$row->redemption_alu}}</td>
                      <td>{{$row->redemption_dcs}}</td>
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

      <!--4 - Redemption Customer Detail -->

      <div class="col-lg-12">
        <form id="promoForm" name="sentMessage" novalidate>
          <div class="row">
            <div class="wrapper" style="background:#fff;margin: 0 auto;">
                <center><h3>Redemption Customer Detail</h3></center>
                <table class="table table-striped sumtable">
                  <thead>
                    <tr>
                      <th>Num</th>
                      <th>Redemption ID</th>
                      <th>Customer Name</th>
                      <th>DOB</th>
                      <th>Category</th>
                      <th>Nationality</th>
                      <th>Race</th>
                      <th>E-Mail</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($redemption4 as $index => $row)
                      <tr>
                        <td>{{$index +1}}</td>
                        <td>{{$row->redemption_id}}</td>
                        <td>{{$row->Name}}</td>
                        <td>{{$row->DOB}}</td>
                        <td>{{$row->Category}}</td>
                        <td>{{$row->Region}}</td>
                        <td>{{$row->Race}}</td>
                        <td>{{$row->Email}}</td>
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

      <!--5 - Redemption Report by Period, by Event -->

      <div class="col-lg-12">
        <form id="promoForm" name="sentMessage" novalidate>
          <div class="row">
            <div class="wrapper" style="background:#fff;margin: 0 auto;">
                <center><h3>Redemption Report by Period/Event</h3></center>
                <table class="table table-striped sumtable">
                  <thead>
                    <tr>
                      <th>Week</th>
                      <th>Redempted Quantity</th>
                    </tr>
                  </thead>
                  <tbody>


                  </tbody>
                </table>
            </div>


          </div>
        </form>
      </div>

    </br></br>
    &nbsp;

      <!--6 - Redemption Report by Period, by Event -->

      <div class="col-lg-12">
        <form id="promoForm" name="sentMessage" novalidate>
          <div class="row">
            <div class="wrapper" style="background:#fff;margin: 0 auto;">
                <center><h3>Customer Redemption History</h3></center>
                <table class="table table-striped sumtable">
                  <thead>
                    <tr>
                      <th>Num</th>
                      <th>Redemption ID</th>
                      <th>Customer Name</th>
                      <th>DOB</th>
                      <th>Total Units</th>
                      <th>Total Visits</th>
                      <th>Total Sales</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($redemption6 as $index => $row)
                    <tr>
                      <td>{{$index +1}}</td>
                      <td>{{$row->redemption_id}}</td>
                      <td>{{$row->Name}}</td>
                      <td>{{$row->DOB}}</td>
                      <td>{{$row->Total_Unit}}</td>
                      <td>{{$row->Visits}}</td>
                      <td>{{$row->Total_Sale}}</td>
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
        <a href='{{ URL::to("/availablesummary")}}'><button id="backbutton" class="btn btn-primary btn-xl text-uppercase" type="button">BACK</button></a>
      </div>
    </div>
  </div>
</section>

@endsection
