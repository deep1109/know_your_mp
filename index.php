<!DOCTYPE html>
<html>
<head>
	<title>Member of Parliament</title>
	<meta charset="utf-8" />
	<meta name = "viewport" content = "width=device-width, maximum-scale = 1, minimum-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/default.css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" />
	<link rel="stylesheet" href="css/table.css" type="text/css" />
	<link rel="stylesheet" href="css/fixed-navigation.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css' />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/default.js"></script>
	<script type="text/javascript"
	    src="https://maps.google.com/maps/api/js?sensor=false">
		<script type="text/javascript" src="./js/jquery-1.4.2.js"></script>
<script type='text/javascript' src="./js/jquery.autocomplete.js"></script>

<link rel="stylesheet" href="style/bootstrap-responsive.css" media="screen" />
<link rel="stylesheet" href="style/bootstrap.css" media="screen" /><!--added for bootstrap-->
<link rel="stylesheet" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
	</script>
	<script type="text/javascript">
	  function initialize() {
	    var latlng = new google.maps.LatLng(29.0167,77.3833)
	    var myOptions = {
	      zoom: 8,
	      center: latlng,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	    var map = new google.maps.Map(document.getElementById("map_canvas"),
	        myOptions);
	  }

	</script>
	[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]
</head>


<body onload="initialize()">

			

	<div id="pagewidth">
	<header id="header">
			<div class="center">
		
				<nav id="mainNav">
					
					<ul>
						<li class="active"><a href="#pagewidth"><span>Know Your MP</span></a></li>
						
						<li><a href="#Map"><span>Map your MP</span></a></li>
						
						<li><a href="#AboutUs"><span>About Us</span></a></li>
						<li><a href="#contactUs"><span>Feedback</span></a></li>
					</ul>
				</nav>
			</div>
		</header>
		
		<div id="content1">
			<section class="row">
			  
				<br><br><br><br>
				<div class="center">
				<h1 style="text-align:left;"> <u>Know Your MP</u>
				
					
					<div class="right">
					<a href="http://facebook.com" target="_blank">
					<a href="https://www.facebook.com/mphaziri" target="_blank">
					<img src="x.png" alt="Smiley face" width="50" height="50"></a>
					<a href="https://twitter.com/#!/webcodebuilder" target="_blank">
					<img src="y.jpg" alt="Smiley face" width="50" height="50"></a></h1>
					</div>
					<h4 style="text-align:center;"><font size="4">  To know about Your MP (Member Of Parliament) select either by name or by Constituency and click submit.</font></h4>
				</div>
				<div class="center">
				
				
				
					
				<div class="columns">
				
						<div class="oneThird">
						
						
						<script type="text/javascript">
$().ready(function() {
	$("#names").autocomplete("autoCompleteMain1.php", {
		width: 300,
		matchContains: true,
		selectFirst: false
	});
});
</script>

<script>
	   $(document).ready(function(e) {
	   	//$('#result').hide();
		   $('#done').click(function(e) {
			
            var alpha=$('#names').val();
			//var name=$('#name').val();
			if(alpha!="")
			{
				
			var cl=alpha;
			$('#result').show();
		$.get("myprocess2.php?cl="+cl, function(data){
      $('#display').html(data);
      
    });
    	//$(document).scrollTo('#result', {duration:1000});
			}
			
			else
			  alert("Please select Name");
        });

    });
	   </script>

<body>
<div id="content">
	
		<p>
		
			
			<input type="text" name="names" id="names" placeholder="Search by Name."/>
		</p>
		<input type="submit" id="done" value="Submit" />
		
</div>
</body>
				
				


					
					</div>
					
					
					<div class="oneThird">
					<br><br><h3> <font color="white"> OR </font> </h3>
					
					</div>
					


					<div class="oneThird">
					



		
					
						<script type="text/javascript">
$().ready(function() {
	$("#state").autocomplete("autoCompleteMain.php", {
		width: 300,
		matchContains: true,
		selectFirst: false
	});
});
</script>

<script>
	   $(document).ready(function(e) {
	   	//$('#result').hide();
		   $('#done2').click(function(e) {
			
            var alpha=$('#state').val();
			//var name=$('#name').val();
			if(alpha!="")
			{
				
			var cl=alpha;
			$('#result').show();
		$.get("myprocess22.php?cl="+cl, function(data){
      $('#display').html(data);
      
    });
    	//$(document).scrollTo('#result', {duration:1000});
			}
			
			else
			  alert("Please select Constituency");
        });

    });
	   </script>

<body>
<div id="content">
	
		<p>
		
		
			<input type="text" name="state" id="state" placeholder="Search by Constituency."/>
		</p>
		<input type="submit" id="done2" value="Submit" />
		
</div>
</body>
					


					
					</div>
					</div>
				</div>
				
				
				
				
				
				
				
				
			
			
			

			<section id="result" class="row">
				<div class="center">
					
					
					<div id="display"></div>
				</div>
			
			
			
			
			
			
	
</section>



				
			
			
			
			<section id="Map" class="row grey">
			<div class="center">
			<h3 style="text-align:left;"><font color="black"><u>Map Your MP</u></font></h3><br>
			
				</div>
				
				
							
				  
				
			

<div class="right" width="60%">
 <div class="center">
<style type="text/css">



        margin-top: 200px;
		margin-right: 0px;
		margin-bottom: 10px;
		margin-left: 70px;
		
		
		
		
#box0{
color:white;
height: 45px;
width: 90px;
background-color:black; /* the critical component */
}

#box1{
color:black;
height: 20px;
width: 70px;
background-color:lightgreen; /* the critical component */
}
	
	#box2 {
color:black;
height: 20px;
width: 70px;
background-color:pink; /* the critical component */
}

#box3 {
color:black;
height: 20px;
width: 70px;
background-color:DarkSlateBlue; /* the critical component */
}
#box4 {
color:black;
height: 20px;
width: 70px;
background-color:#CC3300; /* the critical component */
}
#box5 {
color:black;
height: 20px;
width: 70px;
background-color:#FFFF66; /* the critical component */
}
	.container {
      width:100%;
    }
    .left {
      width:75%;
      float:left;
    }
    .right {
      width:25%;
      float:right;
    }
	
	
	iframe { 
	  max-width:100%;
	 	  }
		  
		  

</style>
		
		
<body>		
		
		
		
<br><br><br><br><br><br><br><br><br><br>

<div id="box0">
<p><font size="5"><font color="black"><u>Attendance</u><br><u> Range</u></font></font></p>
</div>

<div id="box1">
0%-20%
</div><br>
<div id="box2">
21%-40%
</div><br>
<div id="box3">
41%-60%
</div><br>
<div id="box4">
61%-80%
</div><br>
<div id="box5">
81%-100%
</div>
</div>
</div>

<div class="left" width="40%">


&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<div class="imgHolder"><iframe width="900" height="800" scrolling="no" frameborder="0" src="https://www.google.com/fusiontables/embedviz?q=select+col1+from+1KvhbsWCQ6W-OeekAyHf5k2mHihQrmiNLDkQeshs&amp;viz=MAP&amp;h=false&amp;lat=21.86163882570333&amp;lng=79.90420000312498&amp;t=1&amp;z=5&amp;l=col1&amp;y=2&amp;tmplt=2"></iframe></div>

</div>
</body>						
			
									
									
			</section>
			
			
			
			
			
			
			<section id="AboutUs" class="row ">
			
				
				<div class="center">
			<h3 style="text-align:left;"><font color="black"><u>About Us</u></font></h3><br>
			
				</div><div class="center">
				<p align=""><font color="black">Members of the Parliament by, virtue of their elected position, represent the people from their constituency. Many people would like to know more about their representative, what they do in the Parliament, how to contact them etc. Know Your MP is a web portal that aims to fill into information gap and provide information about our Members of the Parliament, their contact information, what they do in the Parliament etc. 
 </p>
                 <p align=""><font color="black">The portal will make use of the publically available information about the MPs and organise them in a format that will allow people to easily search for the information they need.</p>	
                	<p align=""><font color="black">
This portal is being built as a part of the  <a href="http://www.data.gov.in"> IdeaDU </a>  by the students of IIC in collaboration with NIC.

 


</p><br>
				<h2><font color="black"><u></u></font></h2>	
				</div>
			</section>
			<section id="contactUs" class="row grey">
				<div class="center">
					<h1 style="text-align:left;"><u>Feedback</u></h1>
					
					<div class="columns">
						<div class="half">
						<div class="center">
							<form method="post" action="try.php" class="form contact-form">
								<fieldset>
									<font size="6">Feedback form</font>
									<div id="message"></div>
<div class="formRow">
										<div class="textField"><input type="text" name="name" id="name" placeholder="Your Name ..." required="true"/></div>
									</div>
									<div class="formRow">
										<div class="textField"><input type="email" name="email" id="email" placeholder="Your Email ..." required="true"/></div>
									</div>
									<div class="formRow">
										<div class="textField"><textarea cols="20" name="comment" id="comment" rows="4" placeholder="Your Suggestions are welcomed..." required="true"></textarea></div>
									</div>
									<input type="submit" value="submit">

								</fieldset>
							</form>
							</div>
						</div>
						<div class="half">
							<font size="6">Parliament House</font>
							<div id="map">
								<div class="imgHolder"> <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Sansad+Bhavan,+New+Delhi,+Delhi&amp;aq=0&amp;oq=sansad+bhavan+new+delhi&amp;sll=20.983588,82.752628&amp;sspn=45.458666,86.572266&amp;ie=UTF8&amp;hq=Sansad+Bhavan,+New+Delhi,+Delhi&amp;ll=28.617172,77.207798&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe><br /></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
			</div>
</body>
</html>