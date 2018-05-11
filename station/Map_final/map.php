
<!DOCTYPE html>
<html>
<head>
	<title>Map</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
	<!--<link rel="stylesheet" href="main.css"/>-->
	<link rel="stylesheet" href="css-icon.css"/>
	<script type="text/javascript" src="MovingMarker.js"></script>
	<link rel="stylesheet" href="/sih/css/main.css"/>

</head>
<body onload="getLocation();">
<?php
session_start();
require_once("../../app-includes/app-include.php"); //all functions
require_once("../../app-includes/_station.php"); //backend

 siteHeader(); ?>

<div id="mapid" style="width: 600px; height: 400px;"></div>
<p style="font-size:160%;" id="alert"></p>
<p id="demo"></p>
<p id="doit"></p>
<p id="doiton"></p>
<p id="yash"></p>

<script>

	x = document.getElementById("demo");
	var y = document.getElementById("doit");
	var q= document.getElementById("doiton");
	var z= document.getElementById("yash");
	var w=document.getElementById("alert");
	var lat = "";
	var lon ="";

	var manIcon = L.icon({
		iconUrl: "man.png",
		iconSize:     [48,48], // size of the icon
		iconAnchor:   [23,38],
		//className: 'blinking',

	});
	var flagIcon = L.icon({
		iconUrl: "flag.png",
		iconSize:     [40,40], // size of the icon
		iconAnchor:   [7,38],
	//	  className: 'css-icon',
	 // html: '<div class="gps_ring"></div>'
		
	});
	var blueIcon = L.icon({
		iconUrl: "blue-marker.png",
		iconSize:     [26,26], // size of the icon
		
	});
	var redIcon = L.icon({
		iconUrl: "curr.png",
		iconSize:     [48,48], // size of the icon
		iconAnchor:   [24,36],
	});
	var red=L.icon({
		iconUrl: "start.png",
		iconSize:     [60,60], // size of the icon
		iconAnchor:   [30,58],
	});	   
	var options = {
		enableHighAccuracy: true,
		timeout: 5000,
		maximumAge: 0       
	};
	
	

	var mymap;
	var current;
	var route;
	var markera,markerb,markerc,markerd,markere,markerf,markerg,markerh,markeri,markerj,markerk,markerl,markerm,markern,markerld,markermd2,markermd1,markernd,markersupp,markersupp2;
	function getLocation(){
				//id: 'mapbox.streets'
				
				mymap = L.map('mapid');
				L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', 
				
				{
					maxZoom: 23,
					id: 'mapbox.mapbox-streets-v7'
				}).addTo(mymap);
				//var comp = new L.Control.Compass({autoActive: true,showDigit: true});
				//mymap.addControl(comp);
				//mymap.addControl(new mapboxgl.NavigationControl());
				var north = L.control({position: "bottomright"});
				north.onAdd = function(map) {
				var div = L.DomUtil.create("div", "info legend");
				div.innerHTML = '<img src="north.png">';
				return div;
				}
				north.addTo(mymap);
				
				var imageUrl = 'STATION_NEW.png',
				//imageBounds = [[18.529493, 73.849583], [18.527367 , 73.852973]];
				imageBounds = [[18.529467, 73.849604], [18.527468 ,73.852898]];
				L.imageOverlay(imageUrl, imageBounds).addTo(mymap);

				mymap.setMaxBounds(imageBounds);
			
				
				markera=L.marker([18.528064 ,73.85226]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markera);
					setDestMark(e);
				 });
				 markerb=L.marker([18.528287 ,73.852179]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markerb);
					setDestMark(e);
				 });
				markerc=L.marker([18.528628 ,73.852233]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markerc);
					setDestMark(e);
				 });
				markerd=L.marker([18.528064 ,73.852721]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markerd);
					setDestMark(e);
				 });
				markere=L.marker([18.52755 ,73.852002]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markere);
					setDestMark(e);
				 });
				markerf=L.marker([18.52755, 73.852002]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markerf);
					setDestMark(e);
				 });
				markerg=L.marker([18.52788 ,73.851793]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markerg);
					setDestMark(e);
				 });
				markerh=L.marker([18.527855 ,73.850977]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markerg);
					setDestMark(e);
				 });
				markeri=L.marker([18.52787 ,73.850505]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markerg);
					setDestMark(e);
				 });
				markerj=L.marker([18.527911 ,73.849894],{icon:red,opacity:1}).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markerg);
					setDestMark(e);
				 });
				markerk=L.marker([18.529396 ,73.851986]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markerg);
					setDestMark(e);
				 });
				markerl=L.marker([18.528735 ,73.851707]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markerg);
					setDestMark(e);
				 });
				markerm=L.marker([18.528725 ,73.850688]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markerg);
					setDestMark(e);
				 });
				markern=L.marker([18.528725 ,73.849787]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markerg);
					setDestMark(e);
				 });
				markerld=L.marker([18.528191, 73.851718]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markerg);
					setDestMark(e);
				 });
				 
				markermd1=L.marker([18.529289 ,73.850704]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markerg);
					setDestMark(e);
				 });
				markermd2=L.marker([18.528206, 73.850704]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markerg);
					setDestMark(e);
				 });
				markernd=L.marker([18.528191, 73.849792]).addTo(mymap).on('click',function(e){
					//mymap.removeLayer(markerg);
					setDestMark(e);
				 });
				 markersupp=L.marker([18.528099 ,73.851943]).on('click',function(e){
					//mymap.removeLayer(markerg);
					setDestMark(e);
				 });
				 markersupp2=L.marker([18.528659 ,73.851975]).on('click',function(e){
					//mymap.removeLayer(markerg);
					setDestMark(e);
				 });
				 w.innerHTML="_____________Select destination_____________";
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(displayAndWatch, error, options);
				}else{ 
					x.innerHTML = "Geolocation is not supported by this browser.";
				}
		}

	function error(){
		x.innerHTML = "not able to connect to server";
	}
	
//called by geo location

	
	function setMarkerPosition(marker, position) {
        marker.setLatLng(
			new L.LatLng(position.coords.latitude,
            position.coords.longitude)
        );
			
    }
	var currentPositionMarker;
	function setCurrentPosition(position) {
		//currentPositionMarker = L.marker([position.coords.latitude,position.coords.longitude],{icon:manIcon,opacity:0.7}).addTo(mymap);
        mymap.setView([position.coords.latitude,position.coords.longitude],18);
    }
 
    function displayAndWatch(position) {
        ulat=position.coords.latitude;
		ulon=position.coords.longitude;
        // set current position
        setCurrentPosition(position);
             
        // watch position
        watchCurrentPosition();
    }
 
    function watchCurrentPosition() {
		addons();
		var options = {enableHighAccuracy: true,timeout: 5000,maximumAge: 0,desiredAccuracy: 0 };	
        var positionTimer = navigator.geolocation.watchPosition(
            function (position) {
                /*setMarkerPosition(
                    currentPositionMarker,
                    position
                );*/
            },onError,options);
    }
	
	function onError(error) {
     console.log('error');
    }
	function addons()
	{
		mymap.on('click',function(e){
		var flag=0;
		var coord = e.latlng.toString().split(',');
		var lat = coord[0].split('(');
		var lng = coord[1].split(')');
		//q.innerHTML=lat[1]+" "+lng[0];
		for(var p=0;p<arr.length;p++)
		{
			console.log(arr[p][0]+" "+arr[p][1]);
			if(lat[1]==arr[p][0]&&lng[0]==arr[p][1])
			{
					console.log("_____________Destination set_____________");
					flag=1;
					dest_lat=lat[1];
					dest_lon=lng[0];
			}
		}
			if(flag==0)
			{
				console.log("select the specified locations");
			}
		});
	}
		
	var dest_lat;
	var dest_lon;
	
   
    var dest;
    var desti=null;
	function setDestMark(e)
	{
		w.innerHTML="__________Journey in progress__________";
		if (desti!=null) { // check
			mymap.removeLayer(dest);
			desti=null;
		}
		dest = new L.Marker(e.latlng,{icon:flagIcon}).addTo(mymap);
		desti=dest;
		var pop=L.popup();
		pop.setContent("Your destination")
		dest.bindPopup(pop);
		var coord = e.latlng.toString().split(',');
		var lat = coord[0].split('(');
		var lng = coord[1].split(')');
		//z.innerHTML=lat[1]+" "+lng[0];
		dest_lat=lat[1];
		dest_lon=lng[0];
		if(dest_lat==18.527855&&dest_lon==73.850977)
		{
			showRoute2();
		}
		else if(dest_lat==18.529289&&dest_lon==73.850704)
		{
			showRoute3();
		}
		else{
		showRoute();}
	}
		
	function showRoute()
	{
		if(route!=null)
		{
			mymap.removeLayer(route);
		}
		
		var pointList;
		//var a=currentPositionMarker.getLatLng();
		var b=dest.getLatLng();
		var dest_lat=b.lat;
		var dest_lon=b.lng;
		//var current_lat=a.lat;
		//var current_lon=a.lng;
		//var pointA = new L.LatLng(current_lat,current_lon);
		var pointB = new L.LatLng(dest_lat,dest_lon);
		var entry=new L.LatLng(markera.getLatLng().lat,markera.getLatLng().lng);
		var pointmd2=new L.LatLng(markermd2.getLatLng().lat,markermd2.getLatLng().lng);
		var pointm=new L.LatLng(markerm.getLatLng().lat,markerm.getLatLng().lng);
		var pointl=new L.LatLng(markerl.getLatLng().lat,markerl.getLatLng().lng);
		var pointld=new L.LatLng(markerld.getLatLng().lat,markerld.getLatLng().lng);
		var pointmd1=new L.LatLng(markermd1.getLatLng().lat,markermd1.getLatLng().lng);
		var pointn=new L.LatLng(markern.getLatLng().lat,markern.getLatLng().lng);
		var pointnd=new L.LatLng(markernd.getLatLng().lat,markernd.getLatLng().lng);
		var pointf=new L.LatLng(markerf.getLatLng().lat,markerf.getLatLng().lng);
		var pointe=new L.LatLng(markere.getLatLng().lat,markere.getLatLng().lng);
		var pointd=new L.LatLng(markerd.getLatLng().lat,markerd.getLatLng().lng);
		var pointi=new L.LatLng(markeri.getLatLng().lat,markeri.getLatLng().lng);
		var pointj=new L.LatLng(markerj.getLatLng().lat,markerj.getLatLng().lng);
		var pointk=new L.LatLng(markerk.getLatLng().lat,markerk.getLatLng().lng);
		var pointb=new L.LatLng(markerb.getLatLng().lat,markerb.getLatLng().lng);
		var pointc=new L.LatLng(markerc.getLatLng().lat,markerc.getLatLng().lng);
		var pointg=new L.LatLng(markerg.getLatLng().lat,markerg.getLatLng().lng);
		var pointh=new L.LatLng(markerh.getLatLng().lat,markerh.getLatLng().lng);
		var pointsupp=new L.LatLng(markersupp.getLatLng().lat,markersupp.getLatLng().lng);
		var pointsupp2=new L.LatLng(markersupp2.getLatLng().lat,markersupp2.getLatLng().lng);
		var pointList = [pointj,pointnd,pointn,pointm,pointl,pointld,entry,pointd];
		route= new L.Polyline(pointList, {
		color: 'red',
		weight: 4,
		opacity: 0.8,
		smoothFactor: 1
		});

		route.addTo(mymap);
		var coordinateArray = route.getLatLngs();
		var myMovingMarker = L.Marker.movingMarker(coordinateArray,
					12000,{icon:manIcon,opacity:1}).addTo(mymap);

		myMovingMarker.start();
		setTimeout(function() {
			mymap.removeLayer(myMovingMarker);
			mymap.removeLayer(route);
			w.innerHTML="_____________Destination reached_____________";
			//showRoute();
			
		},12000);
		
	}
	
	function showRoute2()
	{
		if(route!=null)
		{
			mymap.removeLayer(route);
		}
		
		var pointList;
		//var a=currentPositionMarker.getLatLng();
		var b=dest.getLatLng();
		var dest_lat=b.lat;
		var dest_lon=b.lng;
		//var current_lat=a.lat;
		//var current_lon=a.lng;
		//var pointA = new L.LatLng(current_lat,current_lon);
		var pointB = new L.LatLng(dest_lat,dest_lon);
		var entry=new L.LatLng(markera.getLatLng().lat,markera.getLatLng().lng);
		var pointmd2=new L.LatLng(markermd2.getLatLng().lat,markermd2.getLatLng().lng);
		var pointm=new L.LatLng(markerm.getLatLng().lat,markerm.getLatLng().lng);
		var pointl=new L.LatLng(markerl.getLatLng().lat,markerl.getLatLng().lng);
		var pointld=new L.LatLng(markerld.getLatLng().lat,markerld.getLatLng().lng);
		var pointmd1=new L.LatLng(markermd1.getLatLng().lat,markermd1.getLatLng().lng);
		var pointn=new L.LatLng(markern.getLatLng().lat,markern.getLatLng().lng);
		var pointnd=new L.LatLng(markernd.getLatLng().lat,markernd.getLatLng().lng);
		var pointf=new L.LatLng(markerf.getLatLng().lat,markerf.getLatLng().lng);
		var pointe=new L.LatLng(markere.getLatLng().lat,markere.getLatLng().lng);
		var pointd=new L.LatLng(markerd.getLatLng().lat,markerd.getLatLng().lng);
		var pointi=new L.LatLng(markeri.getLatLng().lat,markeri.getLatLng().lng);
		var pointj=new L.LatLng(markerj.getLatLng().lat,markerj.getLatLng().lng);
		var pointk=new L.LatLng(markerk.getLatLng().lat,markerk.getLatLng().lng);
		var pointb=new L.LatLng(markerb.getLatLng().lat,markerb.getLatLng().lng);
		var pointc=new L.LatLng(markerc.getLatLng().lat,markerc.getLatLng().lng);
		var pointg=new L.LatLng(markerg.getLatLng().lat,markerg.getLatLng().lng);
		var pointh=new L.LatLng(markerh.getLatLng().lat,markerh.getLatLng().lng);
		var pointsupp=new L.LatLng(markersupp.getLatLng().lat,markersupp.getLatLng().lng);
		var pointsupp2=new L.LatLng(markersupp2.getLatLng().lat,markersupp2.getLatLng().lng);
		var pointList = [pointj,pointnd,pointn,pointm,pointmd2,pointh];
		route= new L.Polyline(pointList, {
		color: 'red',
		weight: 4,
		opacity: 0.8,
		smoothFactor: 1
		});

		route.addTo(mymap);
		var coordinateArray = route.getLatLngs();
		var myMovingMarker = L.Marker.movingMarker(coordinateArray,
					8000,{icon:manIcon,opacity:1}).addTo(mymap);

		myMovingMarker.start();
		setTimeout(function() {
			mymap.removeLayer(myMovingMarker);
			mymap.removeLayer(route);
			w.innerHTML="_____________Destination reached_____________";
			//showRoute();
			
		},8000);
		
	}
	
	function showRoute3()
	{
		if(route!=null)
		{
			mymap.removeLayer(route);
		}
		
		var pointList;
		//var a=currentPositionMarker.getLatLng();
		var b=dest.getLatLng();
		var dest_lat=b.lat;
		var dest_lon=b.lng;
		//var current_lat=a.lat;
		//var current_lon=a.lng;
		//var pointA = new L.LatLng(current_lat,current_lon);
		var pointB = new L.LatLng(dest_lat,dest_lon);
		var entry=new L.LatLng(markera.getLatLng().lat,markera.getLatLng().lng);
		var pointmd2=new L.LatLng(markermd2.getLatLng().lat,markermd2.getLatLng().lng);
		var pointm=new L.LatLng(markerm.getLatLng().lat,markerm.getLatLng().lng);
		var pointl=new L.LatLng(markerl.getLatLng().lat,markerl.getLatLng().lng);
		var pointld=new L.LatLng(markerld.getLatLng().lat,markerld.getLatLng().lng);
		var pointmd1=new L.LatLng(markermd1.getLatLng().lat,markermd1.getLatLng().lng);
		var pointn=new L.LatLng(markern.getLatLng().lat,markern.getLatLng().lng);
		var pointnd=new L.LatLng(markernd.getLatLng().lat,markernd.getLatLng().lng);
		var pointf=new L.LatLng(markerf.getLatLng().lat,markerf.getLatLng().lng);
		var pointe=new L.LatLng(markere.getLatLng().lat,markere.getLatLng().lng);
		var pointd=new L.LatLng(markerd.getLatLng().lat,markerd.getLatLng().lng);
		var pointi=new L.LatLng(markeri.getLatLng().lat,markeri.getLatLng().lng);
		var pointj=new L.LatLng(markerj.getLatLng().lat,markerj.getLatLng().lng);
		var pointk=new L.LatLng(markerk.getLatLng().lat,markerk.getLatLng().lng);
		var pointb=new L.LatLng(markerb.getLatLng().lat,markerb.getLatLng().lng);
		var pointc=new L.LatLng(markerc.getLatLng().lat,markerc.getLatLng().lng);
		var pointg=new L.LatLng(markerg.getLatLng().lat,markerg.getLatLng().lng);
		var pointh=new L.LatLng(markerh.getLatLng().lat,markerh.getLatLng().lng);
		var pointsupp=new L.LatLng(markersupp.getLatLng().lat,markersupp.getLatLng().lng);
		var pointsupp2=new L.LatLng(markersupp2.getLatLng().lat,markersupp2.getLatLng().lng);
		var pointList = [pointj,pointnd,pointn,pointm,pointmd1];
		route= new L.Polyline(pointList, {
		color: 'red',
		weight: 4,
		opacity: 0.8,
		smoothFactor: 1
		});

		route.addTo(mymap);
		var coordinateArray = route.getLatLngs();
		var myMovingMarker = L.Marker.movingMarker(coordinateArray,
					8000,{icon:manIcon,opacity:1}).addTo(mymap);

		myMovingMarker.start();
		setTimeout(function() {
			mymap.removeLayer(myMovingMarker);
			mymap.removeLayer(route);
			w.innerHTML="_____________Destination reached_____________";
			//showRoute();
			
		},8000);
		
	}


function getDistanceFromLatLonInM(lat1,lon1,lat2,lon2) {
  var R = 6371; // Radius of the earth in km
  var dLat = deg2rad(lat2-lat1);  // deg2rad below
  var dLon = deg2rad(lon2-lon1); 
  var a = 
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
    Math.sin(dLon/2) * Math.sin(dLon/2)
    ; 
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
  var d = R * c; // Distance in km
  return (d * 1000).toFixed(1);
}

function deg2rad(deg) {
  return deg * (Math.PI/180)
}


			
</script>
</body>
</html>
