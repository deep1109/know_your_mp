<html>
<body>
<?php

$con=mysqli_connect("localhost","","","test");

if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//////////////DISTRICT-DATA////////////////////////////////////////////

mysqli_query($con,"create table test.district_data1(state text, constituency text,Latitude float,Longitude float)");


$dstt=mysqli_query($con,"select constituency from ` mps_personal_details1new1`");


while($row_dstt=mysqli_fetch_array($dstt))
{

$dstt_val=$row_dstt['constituency'];



$std=mysqli_query($con,"select state from ` mps_personal_details1new1` where constituency='$dstt_val'");
$row_std=mysqli_fetch_array($std);
$std_val=$row_std['state'];


$vald=$dstt_val.", ".$std_val.", India";
$addd = urlencode($vald);
$urld = "http://maps.googleapis.com/maps/api/geocode/json?address=$addd&sensor=false";
$getmapd = file_get_contents($urld);
$googlemapd = json_decode($getmapd);
foreach($googlemapd->results as $resd)
{
	$addressd = $resd->geometry;
	$latlngd = $addressd->location;
}



mysqli_query($con,"insert into test.district_data1 (state,constituency,Latitude,Longitude) values ('$std_val','$dstt_val','$latlngd->lat','$latlngd->lng')");

}

//////////////BLOCK-DATA////////////////////////////////////////////

/**

mysqli_query($con,"create table block_data1(ID int,Block text,Percentage decimal,Latitude float,Longitude float)");


$blk=mysqli_query($con,"select distinct block from mydata.cdata");

while($row_blk=mysqli_fetch_array($blk))
{

$blk_val=$row_blk['block'];

$hbc1=mysqli_query($con,"select count(habitation) from mydata.cdata where block='$blk_val'");
$hbc1_r=mysqli_fetch_array($hbc1);
$hbc1_v=$hbc1_r['count(habitation)'];

$hbc=mysqli_query($con,"select count(habitation) from mydata.cdata where percentage>70 and block='$blk_val'");
$hbc_r=mysqli_fetch_array($hbc);
$hbc_v=$hbc_r['count(habitation)'];

$avb=($hbc_v/$hbc1_v)*100;


$id=mysqli_query($con,"select id from mydata.cdata where block='$blk_val'");
$row_id=mysqli_fetch_array($id);
$id_val=$row_id['id'];

$stb=mysqli_query($con,"select state from `cdata` where state='$blk_val'");
$row_stb=mysqli_fetch_array($stb);
$stb_val=$row_stb['state'];


$valb=$blk_val.", ".$stb_val.", India";
$addb = urlencode($valb);
$urlb = "http://maps.googleapis.com/maps/api/geocode/json?address=$addb&sensor=false";
$getmapb = file_get_contents($urlb);
$googlemapb = json_decode($getmapb);
foreach($googlemapb->results as $resb)
{
	$addressb = $resb->geometry;
	$latlngb = $addressb->location;
}



mysqli_query($con,"insert into mydata.block_data1 (ID,Block,Percentage,Latitude,Longitude) values ('$id_val','$blk_val','$avb','$latlngb->lat','$latlngb->lng')");

}



*/
mysqli_close($con);
?>


</body>
</html>

