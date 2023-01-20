<?php

date_default_timezone_set('Asia/Tokyo');
function funcWeek(){
    return array('日', '月', '火', '水', '木', '金', '土');
}
$w = funcWeek()[date("w")];

echo '現在の日時<br>';
echo date("Y/m/d($w) G:i:s");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ClickEvent: Get Geolocation</title>
<style>html,body{height:100%;}body{padding:0;margin:0;background:#333;}h1{padding:0;margin:0;font-size:50%;color:white;}p{margin:0}button{width:60px;height:60px;background-color: #0B6125;color:white;}</style>
</head>
<body>




<!-- MAP[START] -->
<div id="myMap" style="width:100%;height:98%;"></div>
<!-- MAP[END] -->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src='***API KEY***' asyncdefer></script>
  <script src="js/BmapQuery.js"></script>
<script>
    let map;
    function GetMap() {
        map = new Microsoft.Maps.Map('#myMap', {
            center: new Microsoft.Maps.Location(35.55666392918599, 138.853007651364321),
            zoom: 9,
            mapTypeId: Microsoft.Maps.MapTypeId.aerial
        });
        //ClickEvent:Geolocation
        Microsoft.Maps.Events.addHandler(map, 'click', function (e) {
           alert( map.getCenter() );  // MapLocation(47.61489999999999, -122.19409999999999)
        });
    }
</script>
</body>
</html>