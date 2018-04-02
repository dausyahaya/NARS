@extends('layouts.app1')

@section('content')

    <!-- Contact -->
    <section id="admin">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">SETTING</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">

                <div class="col-lg-12 text-center">
                 <!-- Current Wallpaper<br> -->
               </div>
             </div>

               <div class="row">
                <div class="col-lg-12 text-center" style="padding-bottom:20px;">
                  <a href='{{ URL::to("/changewallpaper")}}'><button id="Upload" class="btn btn-primary btn-xl text-uppercase" type="button">CHANGE WALLPAPER</button></a>
                </div>
              </div>

              <div class="row">
               <div class="col-lg-12 text-center" style="padding-bottom:20px;">
                 <!-- <img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2017/06/29/12/nars-cosmetics-lipsticks.jpg" width="100px" height="100px"> -->
                 <a href='{{ URL::to("/redemptmethod")}}'><button id="redemptmode" style="width:290px" class="btn btn-primary btn-xl text-uppercase" type="button">REDEMPT MODE</button></a>
               </div>
             </div>


            </form>
          </div>
        </div>
      </div>
    </section>

@endsection
