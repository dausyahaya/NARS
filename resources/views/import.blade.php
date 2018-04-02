@extends('layouts.app1')

@section('content')

    <!-- Contact -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <section id="admin">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase" style="padding-bottom:40px;">IMPORT</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <!-- <form action="{{ URL::to('importExcelCustomerList') }}" class="form-horizontal" method="post" enctype="multipart/form-data"> -->
              <form action="{{ URL::to('importExcelSalesReceiptSummary') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
             <!-- <form action="{{ URL::to('importExcelStoreList') }}" class="form-horizontal" method="post" enctype="multipart/form-data"> -->
               <div class="row">
                <div class="col-lg-12 text-center" style="padding-bottom:40px;">

                  <select style="width:500px;height:40px" name="import_file_name">
                    <option value="customer_list">Customer List</option>
                    <option value="customer_sales">Customer Sales</option>
                    <option value="sales_item_summary">Sales Item Summary</option>
                    <option value="sales_receipt_data">Sales Receipt Data</option>
                    <option value="sales_receipt_summary">Sales Receipt Summary</option>
                    <option value="total_sales_transaction_record">Total Sales Transaction Record</option>
                  </select>
                  <input type="file" name="import_file" />
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <!-- Firdaus 21/3/2018 -->

                </div>
              </div>

              <div class="row">
               <div class="col-lg-12 text-center" style="padding-bottom:20px;">

                  <button class="btn btn-primary btn-xl text-uppercase">IMPORT</button>
                  <!-- <button class="btn btn-primary">Import File</button> -->
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>

@endsection
