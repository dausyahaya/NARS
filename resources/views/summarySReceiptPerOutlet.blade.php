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
        <h2 class="section-heading text-uppercase">SALES SUMMARY</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">


      <!--3 - Receipts Per Outlet - Sales Figure -->

      <div class="col-lg-12">
        <form id="promoForm" name="sentMessage" novalidate>
          <div class="row">
            <div class="wrapper" style="background:#fff;margin: 0 auto;">
                <center><h3>Receipts Per Outlet - Sales Figure</h3></center>
                <table class="table table-striped sumtable">
                  <thead>
                    <tr>
                      <th>Num</th>
                      <th>Store</th>
                      <th>Subsidairy Name</th>
                      <th>Receipt No</th>
                      <th>Receipt Date & Time</th>
                      <th>Ext Original Time</th>
                      <th>Ext Disc Amount</th>
                      <th>Ext P$</th>
                      <th>Ext P$T$</th>
                      <th>Tax Amount</th>
                      <th>Receipt Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sales2 as $index => $row)
                    <tr>
                      <td>{{$index +1}}</td>
                      <td>{{$row->Store}}</td>
                      <td>{{$row->Customer_Name}}</td>
                      <td>{{$row->Rcpt}}</td>
                      <td>{{$row->Rcpt_Date_Time}}</td>
                      <td>{{$row->Ext_Orig_Price}}</td>
                      <td>{{$row->Ext_Disc_Amt}}</td>
                      <td>{{$row->Ext_P}}</td>
                      <td>{{$row->Ext_PT}}</td>
                      <td>{{$row->Rcpt_Tax_Amt}}</td>
                      <td>{{$row->Rcpt_Total}}</td>
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
