<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>サンプルコード「directionsService」</title>
</head>
<?php 
$starthour = new DateTime('yesterday');
$endhour = new DateTime('tomorrow');
$sita = 0;
$hidari=0;
$ue = 180;
$migi=360;
if(isset($_GET["hour"])) $starthour = $_GET["hour"];
if(isset($_GET["houre"])) $endhour = $_GET["houre"];
if(isset($_GET["lat"])) {$lat = $_GET["lat"]; $ue = $lat + 1.5; $sita = $lat - 1.5;}
if(isset($_GET["lng"])) {$lng = $_GET["lng"]; $migi = $lng + 1.5; $hidari = $lng -1.5;}


//設定お願いします。
$sv = "localhost";
$dbname = "easy-stopping-server";
$user = "root";
$pass = "24382525";

function conndb() {
    global $conn;
    global $sv;
    global $dbname;
    global $user;
    global $pass;
    $conn = mysql_connect($sv, $user, $pass) or die("接続エラー");
    mysql_select_db($dbname) or die("接続エラー");
}

function closedb() {
    global $conn;
    mysql_close($conn);
}

conndb();

$sql = "SELECT COUNT(parking_place_id) FROM parking_places WHERE start_time <".  "2014-6-31 15:00:00". " AND end_time > "."2013-5-3 15:00:00". " AND latitude <".$ue." AND latitude > ".$sita." AND longtitude >".$hidari." AND longtitude < ".$migi." NATURAL INNER JOIN blank_times";

$count = mysql_query($sql, $conn);

$sql = "SELECT parking_place_id FROM parking_places WHERE start_time <".  "2014-6-31 15:00:00". " AND end_time > "."2013-5-3 15:00:00". " AND latitude <".$ue." AND latitude > ".$sita." AND longtitude >".$hidari." AND longtitude < ".$migi." NATURAL INNER JOIN blank_times";


$res = mysql_query($sql, $conn);
if($count > 10) {$count = 10;}

for($i=0;$i < $count;$i++){
$row[i] = mysql_fetch_array($res, MYSQL_ASSOC);

//ジオコーダーで住所取得
$latlng = new google.maps.LatLng($row[i]["lat"],$row[i]["lang"]);
$url= "https://maps.googleapis.com/maps/api/geocode/json?latlng=$lating&sensor=false";
$json = file_get_contents($url);
$obj = json_decode($json);
?>

//検索にかかった場所にマーカーしたい
echo "<script>var add =" .$obj->formatted_address ."</script>";
echo "<script>var price =". $row[i]["price"]."</script>";
<script>
var div= document.createElement("div");
div.innerHTML = "<p>住所" . add . " 値段" . price ."円";
document.body.appendChild(div);
</script>
<?php
}//for
closedb();
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
  var map;
  var directionDisplay;
  var directionsService;
  var stepDisplay;
  var marker = null;
  var endlat;
  var endlng;

  function initialize() {
    // Instantiate a directions service. インスタンス作成
    directionsService = new google.maps.DirectionsService();
    
    var TOKYO = new google.maps.LatLng(35.6894875, 139.69170639999993);
    var myOptions = {
      zoom: 13,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: TOKYO
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    
	var trafficLayer = new google.maps.TrafficLayer();
	trafficLayer.setMap(map);

    
    // Create a renderer for directions and bind it to the map.
    var rendererOptions = {
      map: map
    }
    directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions)
    
    // Instantiate an info window to hold step text.
    stepDisplay = new google.maps.InfoWindow();
    

google.maps.event.addListener(map,'click',function(event){
    if(marker != null){ marker.setMap(null);}
	marker = new google.maps.Marker({
		position:event.latLng,
		map:map
		});
    gm = marker;
	end = event.latLng;
	endlat = end.lat();
	endlng = end.lng();
	calcRoute();
	
	});//リスナ
	
	
  } //最初の設定

</script>

<body onload="initialize()">
<div style="text-align:center">

<form name="form" id="form" method="get">
<b>住所</b>
<input type=text id="zyusyo">
<select name="hour" id="hour">
<?php 
for($i = 0;$i<24;$i++){
echo'<option value="' + $i + '">' + $i + '時</option>';
}
echo '</select>';
echo"から";
echo'<select name="houre"id="houre">';
for($i = 0;$i<24;$i++){
echo'<option value="' + $i + '">' + $i + '時</option>';
}
echo '</select>';
echo"まで";
?>
<input type=submit id="search" value="検索する">
<input type=hidden id="lat">
<input type=hidden id="lng">
</form>
</div>

<div id="warnings_panel" style="width:100%;height:10%;text-align:center"></div>
<div id="map_canvas" style="width:30%;height:50%;text-align:left"></div>

<script type="text/javascript">
var zyusyo = document.getElementById("zyusyo");
zyusyo.addEventListener("change",function(e){
var address = zyusyo.value;
  var geocoder = new google.maps.Geocoder();
  geocoder.geocode(
      { address: address },
      function( results, status )
      {
          if( status == google.maps.GeocoderStatus.OK )
          {
               document.getElementById("lat").value = results[ 0 ].geometry.location.lat();
               document.getElementById("lng").value = results[ 0 ].geometry.location.lng();
               
          }
        }  ); //geocoder 
      } ); //eventlistener
</script>
</body>
</html>