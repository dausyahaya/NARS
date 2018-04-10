<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <title>Clique | Community, Your Way!</title>

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
    margin-top: -390px;
    margin-left: 500px;

		

    }

    #question{

        position: absolute;

        width:400px;

        height:500px;

        top:0;

        left:720px;

    }

    #question h1{

		color:white;

        font-size: 50px;

        font-weight: bold;

        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;

        position: absolute;

        padding: 0;

        margin: 0;

        top:60%;

		left:420px;

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

    
<head>

 <body bgcolor="#000000">


    <div id="top">
        <IMG class="displayed" src="tmcliquew.png" alt="clique" style="width:400px;"/>
        <h1 style="color:white;">Community, your way!</h1>
    </div>

    <div id="text1"> 
    
<!--    <form method = "POST" action = "addinfo.php">
        <h1>Clique ID: <input type="text" name="CliqueID"></h1>
    
        <button class="button button1"  type="submit" value="Submit" >Submit</button> 
    </form>-->

  
    <button class="button button1" name="prize" value="" onclick="spin()">Spin</button>      
    <button class="button button1" onclick="myFunction()">Refresh</button>

     </div>

	<div id="chart"></div>

    <div name="question" id="question"><h1></h1></div>

    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>

    <script type="text/javascript" charset="utf-8">

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

                                        
                                        {"label":"Notepad", "value":1,  "question":"Notepad"},
                                        
					{"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"},
					
                                        {"label":"Water Tumbler", "value":1,  "question":"Water Tumbler"},
                                        
                                        {"label":"Notepad", "value":1,  "question":"Notepad"},
                                        
					{"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"},
					
					{"label":"Notepad", "value":1,  "question":"Notepad"},
					
					{"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"},
					
                                        {"label":"Water Tumbler", "value":1,  "question":"Water Tumbler"},
					
					{"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"},
					
					{"label":"Pendrive", "value":1,  "question":"Pendrive"},

                                        {"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"},
					
                                        {"label":"Water Tumbler", "value":1,  "question":"Water Tumbler"},
                                        
					{"label":"Pendrive", "value":1,  "question":"Pendrive"},
        
                                        {"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"}, 
					 
                                        {"label":"Water Tumbler", "value":1,  "question":"Water Tumbler"},
					
					{"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"},

                                        {"label":"Notepad", "value":1,  "question":"Notepad"},
                                        
					{"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"},
					
					{"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"},
					
                                        {"label":"Pendrive", "value":1,  "question":"Pendrive"},
                                        
                                        {"label":"Water Tumbler", "value":1,  "question":"Water Tumbler"},
                                        
					{"label":"Notepad", "value":1,  "question":"Notepad"},
					
					{"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"},
					
                                        {"label":"Notepad", "value":1,  "question":"Notepad"},
                                        
                                        {"label":"Notepad", "value":1,  "question":"Notepad"},
                                        
					{"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"},
									
					{"label":"Water Tumbler", "value":1,  "question":"Water Tumbler"},
					
                                        {"label":"Pendrive", "value":1,  "question":"Pendrive"},
                                        
					{"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"},
					
					{"label":"Notepad", "value":1,  "question":"Notepad"},
					
					{"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"},	
					
					
                                        {"label":"Notepad", "value":1,  "question":"Notepad"},
					
                                        {"label":"Notepad", "value":1,  "question":"Notepad"},
                                        
					{"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"},
					
                                        {"label":"Water Tumbler", "value":1,  "question":"Water Tumbler"},
                                        

                                        {"label":"Notepad", "value":1,  "question":"Notepad"},
                                        
					{"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"},
					
                                        {"label":"Pendrive", "value":1,  "question":"Pendrive"},
                                        
					{"label":"Water Tumbler", "value":1,  "question":"Water Tumbler"},
					
                                        {"label":"Notepad", "value":1,  "question":"Notepad"},
                                        
                                        {"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"},
                                        
                                        {"label":"Recycle Bag", "value":1,  "question":"Recycle Bag"},
                                        
                                        {"label":"Pendrive", "value":1,  "question":"Pendrive"},
                                        
                                        {"label":"Notepad", "value":1,  "question":"Notepad"},
                                        

                    

                   

					

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

		

		function myFunction() {

				location.reload();
				
				document.location.href="spinnerexample.php";
		}
		
			

        function spin(d){

            //all slices have been seen, all done

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

                    d3.select("#question h1")

                        .text(data[picked].question);

                    oldrotation = rotation;

                });

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

            .text("HELLO")

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
</body>

</html>