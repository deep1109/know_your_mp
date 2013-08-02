<?php
include ('connection.php');

$q = strtoupper($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT from `abcd` where state LIKE '%$q%'";
$sql2 = "select DISTINCT constituency as constituency from `abcd` where constituency LIKE '%$q%'";

$st = mysql_query($sql);
$const = mysql_query($sql2);

if($st)
{while($rs = mysql_fetch_array($st)) {
	$cname = $rs['state'];
	echo "$cname\n";}
}
if($const)
{while($rs = mysql_fetch_array($const))
   {$cname = $rs['constituency'];
	echo "$cname\n";}
}
?>