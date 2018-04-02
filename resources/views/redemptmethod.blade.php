@extends('layouts.app1')
@section('head')
<style>
.btn-xl {
    font-size: 18px;
    padding: 20px 40px;
    margin: 10px;
}
</style>
@endsection

@section('content')

<section id="admin">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">REDEMPT MODE</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form id="" method="POST" action="{{URL('/savemethod')}}">
            {{ csrf_field() }}
          <div class="row">

            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>

              @if ($redemptgift->value=="A")
              <div class="radio">
                <label style="color:#fff"><input type="radio" name="method" value="A"  checked="checked">Promo Code</label>
              </div>
              <div class="radio">
                <label style="color:#fff"><input type="radio" name="method" value="B">Spinner Wheel</label>
              </div>
              <div class="radio">
                <label style="color:#fff"><input type="radio" name="method" value="C">Pictures</label>
              </div>
              @endif

              @if($redemptgift->value=="B")
              <div class="radio">
                <label style="color:#fff"><input type="radio" name="method" value="A">Promo Code</label>
              </div>
              <div class="radio">
                <label style="color:#fff"><input type="radio" name="method" value="B" checked="checked">Spinner Wheel</label>
              </div>
              <div class="radio">
                <label style="color:#fff"><input type="radio" name="method" value="C">Pictures</label>
              </div>
              @endif

              @if($redemptgift->value=="C")
              <div class="radio">
                <label style="color:#fff"><input type="radio" name="method" value="A">Promo Code</label>
              </div>
              <div class="radio">
                <label style="color:#fff"><input type="radio" name="method" value="B">Spinner Wheel</label>
              </div>
              <div class="radio">
                <label style="color:#fff"><input type="radio" name="method" value="C" checked="checked">Pictures</label>
              </div>
              @endif
              <button id="save" class="btn btn-primary btn-xl text-uppercase" type="submit" style="">Save</button>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


@endsection
