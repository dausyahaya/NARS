@extends('layouts.app1')

@section('content')

<section id="store">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">PRODUCTS</h2>
        <h3 class="section-subheading text-muted">{{$store->name}}
          <body onload="startTime()">
            <div id="txt"></div>
          </body>
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <form id="promoForm" name="sentMessage" novalidate>
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                  <img src="https://s4.thcdn.com/productimg/0/600/600/88/10626288-1343052865-451265.jpg" width="200px" height="200px">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                  <img src="https://1uhocf2skxl2mzfok4cuutlqf1-wpengine.netdna-ssl.com/wp-content/uploads/2012/09/NARS-Andy-Warhol-Larger-Than-Life-Lip-Gloss-group-set.jpg" width="200px" height="200px">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                  <img src="https://s1.thcdn.com/productimg/0/960/960/24/10999824-1413991019-744584.jpg" width="200px" height="200px">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                  <img src="http://www.narscosmetics.com/on/demandware.static/-/Sites-itemmaster_NARS/default/dw3d08a39b/hi-res/0607845051572.jpg" width="200px" height="200px">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                  <img src="https://d1ibm7nofgdn3g.cloudfront.net/nars-cosmetics-duo-eyeshadow-kuala-lumpur-1101822.jpg" width="200px" height="200px">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                  <img src="https://s4.thcdn.com/productimg/0/960/960/23/10999823-1413991019-744820.jpg" width="200px" height="200px">
              </div>
            </div>



            <div class="clearfix"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
