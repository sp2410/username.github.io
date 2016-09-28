<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body { margin:0; } 
* {
    box-sizing: border-box;
}
/*
.header{
	background-color: black;
	background-image: url("FotorCreated.png");
	background-repeat: no-repeat;	
	height: 50px;
    color: white;    
}
.footer{
	background-color: black;
	background-image: url("FotorCreated.png");
	background-repeat: no-repeat;	
	height: 200px;
    color: white;      
}
*/
.parallax {
    /* The image used */
    background-image: url("http://static1.squarespace.com/static/51c748abe4b0c275d0aa86bf/56141631e4b0095d43132f02/56143453e4b06dc85b46bf6b/1444744863151/spg.gif?format=500w");

    /* Set a specific height */
    min-height: 700px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	background-padding: 200px;	
}
.parallax1 {
    /* The image used */
    background-image: url("http://farm6.static.flickr.com/5029/5658551241_8852d44b38_o.gif");

    /* Set a specific height */
    min-height: 700px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	background-padding: 500px
}
.parallax2 {
    /* The image used */
    background-image: url("http://static1.squarespace.com/static/51c748abe4b0c275d0aa86bf/56141631e4b0095d43132f02/56141648e4b0652b31fbd09a/1444744827403/fireplace980.gif?format=500w");

    /* Set a specific height */
    min-height: 700px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	background-padding: 500px
}
.parallax3 {
    /* The image used */
    background-image: url("https://static1.squarespace.com/static/51c748abe4b0c275d0aa86bf/56141f2be4b0a4afc2d17505/561587f3e4b0f890085b86fb/1469211516261/?format=500w");

    /* Set a specific height */
    min-height: 700px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	background-padding: 500px
}
.parallax4 {
    /* The image used */
    background-image: url("http://static1.squarespace.com/static/51c748abe4b0c275d0aa86bf/56141631e4b0095d43132f02/5614164be4b018c0454fd619/1444744841735/pool980.gif?format=500w");

    /* Set a specific height */
    min-height: 700px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	background-padding: 500px
}
.container {
    display: inline-block;
    cursor: pointer;
	align: left;
	margin-left:20px;
	margin-top:20px;
	
}

.bar1, .bar2, .bar3 {
    width: 35px;
    height: 5px;
    background-color: #fff;
    margin: 6px 0;
    transition: 0.4s;
}

/* Rotate first bar */
.change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-9px, 6px) ;
    transform: rotate(-45deg) translate(-9px, 6px) ;
}

/* Fade out the second bar */
.change .bar2 {
    opacity: 0;
}

/* Rotate last bar */
.change .bar3 {
    -webkit-transform: rotate(45deg) translate(-8px, -8px) ;
    transform: rotate(45deg) translate(-8px, -8px) ;
}

</style>
</head>

<body>
<div class="parallax" align="left">
<div id="map1" style="height:700px; width:30%;background-color:#000000;font-size:36px;opacity:0.7">

<div class="container" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>

</div>
</div>


<div class="parallax1" align="right">
<div id="map1" style="height:700px; width:70%;background-color:#000000;font-size:36px;opacity:0.7"></div>
</div>


<div class="parallax2" align="left"></div>


<div class="parallax3" align="right">
<div id="map1" style="height:700px; width:50%;background-color:#000000;font-size:36px;opacity:0.7"></div>
</div>


<div class="parallax4" align="left">
<div id="map1"  style="height:700px; width:50%;background-color:#000000;font-size:36px;opacity:0.7"></div>
</div>
<div class="footer" style="height:150px; background-color:#000000;font-size:36px">

<script>
function myFunction(x) {
    x.classList.toggle("change");
}
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>



</div>


</body>
</html>

