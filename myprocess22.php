<!DOCTYPE html>

<html>

<head>
<style>
body
{
background-image:url(11.jpg);
 background-repeat:no-repeat;
 background-size:cover;
}
</style>
</head>
<body>
			<div class="center">
			<h3 style="text-align:left;"><font color="black"><u>Personal Details</u></font></h3><br>
			
				</div>

</body>
</html>

<?php
$cl=explode(':',$_REQUEST['cl']);
$detail=$cl[0];

include('connection.php');
$q=mysql_query("SELECT * FROM mps_personal_details1new  WHERE Constituency='$detail'");



while($row=mysql_fetch_array($q))
{

      echo "<font size='3'><b>Member Name </b></font>---".$name=$row['name'];
      echo "<br>";
	echo "<font size='3'><b>State</b></font>---".$b=$row['state']."<br>";
	echo "<font size='3'><b>Constituency</b></font>---".$b=$row['constituency']."<br>";
        echo "<font size='3'><b>Party</b></font>---".$b=$row['party']."<br>";
        echo "<font size='3'><b>Residential Address</b></font>---".$b=$row['permanent_address']."<br>";
	echo "<font size='3'><b>Official Address</b></font>---".$b=$row['present_address']."<br>";
        echo "<font size='3'><b>Contact</b></font>---".$b=$row['contact']."<br>";
	echo "<font size='3'><b>Email</b></font>---".$b=$row['email_address']."<br>";
      


}
	
echo "<br>";
echo "<br>";
?>
<html>
<div class="center">
			<h3 style="text-align:left;"><font color="black"><u>Attendance Status</u></font></h3><br>
			
				</div>

</html>
<?php




$qu=mysql_query("Select * from session_table where Name='$name' ");

if ($qu && mysql_num_rows($qu) > 0)


{

echo "<table border='4' bordercolor=black  CELLPADDING='10'>
<tr>

<th>Session No.</th>

<th>Number of Present Days</th>
<th>Number of Absent Days</th>
<th>Attendance Percentage</th>
</tr>";

$total_price = 0;
$count=0;

while($row1=mysql_fetch_array($qu))
   
 


{       echo "<tr>";
 
  
	 echo "<td>" . $row1['session_no'] . "</td>";

	 echo "<td>" . $row1['no_of_days_present'] . "</td>";
	 echo "<td>" . $row1['no_of_days_absent'] . "</td>";
	  echo "<td>" . $row1['percentage'] . "</td>";
         echo "</tr>"; 


  echo "</tr>";
  $total_price += $row1['percentage'];
  $count=$count+1;
  }



echo "<font size='3'><b>Overall Percentage of Attendance:</b>";

$z=$total_price/$count;

$formatted_number = round($z,2);

echo $formatted_number;
echo "%";

 echo "<br>";
  echo "<br>";
   
echo "</table>";
}

else

    {
          
	 echo "<font size='3'><b>Data Not Available</b>"; 
    }


?>