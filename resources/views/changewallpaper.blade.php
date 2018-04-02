@extends('layouts.app1')
@section('head')
<style>
  img{
  max-width:180px;
  }
  input[type=file]{
  padding:10px;
  background:#2d2d2d;}
</style>
@endsection

@section('content')

    <!-- Contact -->
    <section id="admin">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase" style="padding-bottom:50px">CHANGE WALLPAPER</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form enctype="multipart/form-data" method="POST" action="{{URL('/savewallpaper')}}">
              {{ csrf_field() }}
              <div class="row">

                <div class="col-lg-12 text-center">
                 <!-- Current Wallpaper<br> -->
               </div>
             </div>

               <div class="row">
                <div class="col-lg-12 text-center" style="padding-bottom:20px;">
                  <input type="file" name="wallpaper" id="wallpaper" style="color:#fff;" required>
                  <input type="submit" class="btn btn-primary btn-xl text-uppercase" value="Upload Image" name="submit" onclick="updatewallpaper()">
                </div>
              </div>



            </form>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('script')
<script>
function updateprofilepicture() {
      $.ajaxSetup({
         headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
      });
      $.ajax({
                  url: "{{ url('/user/updatewallpaper') }}",
                  method: "POST",
                  contentType: false,
                  processData: false,
                  data:new FormData($("#upload_form")[0]),
                  success: function(response){
                    if (response==0)
                    {
                      var message ="No update on wallper picture!";
                      $("#warning-alert ul").html(message);
                      $("#warning-alert").show();
                      $('#UpdateWallpaper').modal('hide')

                      setTimeout(function() {
                        $("#warning-alert").fadeOut();
                      }, 6000);
                    }
                    else {
                      var message ="Wallpaper picture updated!";
                      $("#update-alert ul").html(message);
                      $("#update-alert").show();
                      $("#Template option:selected").val(response).change();
                      //$("#Template").val(response).change();
                      $("#exist-alert").hide();
                      $('#UpdateWallpaperPicture').modal('hide')
                      $('#profileimage').attr('src',response);
                      $("#profilepicture").val("");

                      setTimeout(function() {
                        $("#update-alert").fadeOut();
                      }, 6000);
                    }
          }
      });
  }
</script>
@endsection
