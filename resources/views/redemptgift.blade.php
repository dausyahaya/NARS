@extends('layouts.app1')






@section('content')

<style type="text/css">



  .button {
      background-color: #FF4A02; /* Green */
      border: none;
      color: white;
      padding: 14px 30px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      cursor: pointer;
  }
  
  .button1 {
      background-color: white; 
      color: black; 
      border: 2px solid #FF4A02;
  }
  
  .button1:hover {
      background-color: #FF4A02;
      color: white;
  }
      text{
  
          font-family:Helvetica, Arial, sans-serif;
  
          font-size:13.5px;
  
          pointer-events:none;
  
      }
  
    #text1 {
  
      color:white;
      margin-left: 60px;
        margin-top: 40px;
    }
  
  #text1 input{
  font-size: 18px;
  }
    IMG.displayed {
  
      display: block;
  
    }
  
  
      #chart{
  
       width: 500px;
      height: 500px;
      top: 40px;
      left: 410px;
      
     
  
      
  
      }
  
      #detail{
  
          position: absolute;
  
          width:400px;
  
          height:500px;
  
          top:9px;
  
          right:261px;
  
      }
  
      #detail h1{
  
      color:white;
  
          font-size: 50px;
  
          font-weight: bold;
  
          font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  
          position: absolute;
  
          padding: 0;
  
          margin: 0;
  
          top:60%;
  
      left:295px;
  
          -webkit-transform:translate(0,-50%);
  
                  transform:translate(0,-50%);
  
      }
    
    #top {
          margin-top: 100px;
          margin-left: 40px;
    }
  
    #top h1{
      margin-top: 0;
      margin-left: 30px;
    }
    </style>
  


@if ($redemptgift->value=="A")

<section id="store">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">PROMO CODE</h2>
        <h3 class="section-subheading text-muted">{{$store->name}}
          <body onload="startTime()">
            <div id="txt"></div>
          </body>
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form id="promoForm" name="sentMessage" novalidate>
          <div class="row">
              <div class="form-group">
                <input class="form-control" id="promocode" type="text" placeholder="Promo Code *" required data-validation-required-message="Please enter your promocode.">
                <p class="help-block text-danger"></p>
              </div>


            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button id="validateButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Validate</button>
              
              <!-- <h3 class="section-subheading text-muted"><a href='{{ URL::to("/redemptmethod")}}'>SKIP</a></h3> -->
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@elseif($redemptgift->value=="B")


<section id="store">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Spinner Wheel</h2>
        <h3 class="section-subheading text-muted">{{$store->name}}
          <body onload="startTime()">
            <div id="txt"></div>
          </body>
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div id="text1"> 
            <button class="button button1" name="prize" value="" onclick="spin()">Spin</button>      
           </div>
        <div id="chart"></div> 
        <form id="promoForm" name="sentMessage" method='post' action="{{URL('redemptvalidate')}}" novalidate>
        <input type="hidden" name="method" value="Spinner Wheel"/>
        <input type="hidden" name="product_value"  id='product_value'/>
        <input type="hidden" name="product_dcs"  id='product_dcs'/>
        <input type="hidden" name="cust_id" value="{{Session::get('cust_id')}}" />
        <div name="detail" id="detail"><h1></h1></div>
        <div class="clearfix"></div>
        <div class="col-lg-12 text-center" style="top:34px;">
          <div id="success"></div>
       <button id="validateButton" class="button button1" type="submit">Validate</button>
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
      </div>
    </form>
      </div>
    </div>
  </div>
  
</section>

@else

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

@endif
@section('content')
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script type="text/javascript">

  var padding = {top:20, right:40, bottom:0, left:0},

      w = 600 - padding.left - padding.right,

      h = 600 - padding.top  - padding.bottom,

      r = Math.min(w, h)/2,

      rotation = 0,

      oldrotation = 0,

      picked = 100000,

      oldpick = [],

      color = d3.scale.category20();//category20c()
  
  var data = [
    @foreach($data as $data)                            
        {"label":"{{$data->DCS_CODE}}/{{$data->ALU}}", "value":"{{$data->ALU}}",  "DCS":"{{$data->DCS_CODE}}"},
    @endforeach                             
  ];

  var svg = d3.select('#chart')

      .append("svg")

      .data([data])

      .attr("width",  w + padding.left + padding.right)

      .attr("height", h + padding.top + padding.bottom);

  var container = svg.append("g")

      .attr("class", "chartholder")

      .attr("transform", "translate(" + (w/2 + padding.left) + "," + (h/2 + padding.top) + ")");

  var vis = container

      .append("g");

      

  var pie = d3.layout.pie().sort(null).value(function(d){return 1;});

  // declare an arc generator function

  var arc = d3.svg.arc().outerRadius(r);

  // select paths, use arc generator to draw

  var arcs = vis.selectAll("g.slice")

      .data(pie)

      .enter()

      .append("g")

      .attr("class", "slice");

      

  arcs.append("path")

      .attr("fill", function(d, i){ return color(i); })

      .attr("d", function (d) { return arc(d); });

  // add the text

  arcs.append("text").attr("transform", function(d){

          d.innerRadius = 0;

          d.outerRadius = r;

          d.angle = (d.startAngle + d.endAngle)/2;

          return "rotate(" + (d.angle * 180 / Math.PI - 90) + ")translate(" + (d.outerRadius -10) +")";

      })

      .attr("text-anchor", "end")

      .text( function(d, i) {

          return data[i].label;

      });

  container.on("click", spin);





var spin_count=0;
  function spin(d){

      //all slices have been seen, all done
     

     if(spin_count == 0){
      if(oldpick.length == (data.length - 1)){

          console.log("done");

          container.on("click", null);

          return;

      }

      var  ps       = 360/data.length,

           pieslice = Math.round(1440/data.length),

           rng      = Math.floor((Math.random() * 1440) + 360);

          

      rotation = (Math.round(rng / ps) * ps);

      

      picked = Math.round(data.length - (rotation % 360)/ps);

      picked = picked >= data.length ? (picked % data.length) : picked;

      if(oldpick.indexOf(picked) !== -1){

          d3.select(this).call(spin);

          return;

      } else {

          oldpick.push(picked);

      }

      rotation += 90 - Math.round(ps/2);

      vis.transition()

          .duration(3000)

          .attrTween("transform", rotTween)

          .each("end", function(){

              //mark question as seen

              d3.select(".slice:nth-child(" + (picked + 1) + ") path")

                  .attr("fill", "#111");

              //populate question

              d3.select("#detail h1")

                  .text(data[picked].label);
              
              oldrotation = rotation;
              document.getElementById('product_value').value=data[picked].value;
              document.getElementById('product_dcs').value=data[picked].DCS;
          });
          spin_count+=1;
    }
    else{}
  }

  //make arrow

  svg.append("g")

      .attr("transform", "translate(" + (w + padding.left + padding.right) + "," + ((h/2)+padding.top) + ")")

      .append("path")

      .attr("d", "M-" + (r*.15) + ",0L0," + (r*.05) + "L0,-" + (r*.05) + "Z")

      .style({"fill":"white"});

  //draw spin circle

  container.append("circle")

      .attr("cx", 0)

      .attr("cy", 0)

      .attr("r", 60)

      .style({"fill":"white","cursor":"pointer"});

  //spin text

  container.append("text")

      .attr("x", 0)

      .attr("y", 15)

      .attr("text-anchor", "middle")

      .text("Spin")

      .style({"font-weight":"bold", "font-size":"30px"});

  

  

  function rotTween(to) {

    var i = d3.interpolate(oldrotation % 360, rotation);

    return function(t) {

      return "rotate(" + i(t) + ")";

    };

  }     

  

  function getRandomNumbers(){

      var array = new Uint16Array(1000);

      var scale = d3.scale.linear().range([360, 1440]).domain([0, 100000]);

      if(window.hasOwnProperty("crypto") && typeof window.crypto.getRandomValues === "function"){

          window.crypto.getRandomValues(array);

          console.log("works");

      } else {

          //no support for crypto, get crappy random numbers

          for(var i=0; i < 1000; i++){

              array[i] = Math.floor(Math.random() * 100000) + 1;

          }

      }

      return array;

  }
</script>

@endsection
