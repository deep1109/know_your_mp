<!DOCTYPE html>
<html>
<head>
	<title>Member of Parliament</title>
	<meta charset="utf-8" />
	<meta name = "viewport" content = "width=device-width, maximum-scale = 1, minimum-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/default.css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" />
	<link rel="stylesheet" href="css/fixed-navigation.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css' />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/default.js"></script>
	<script type="text/javascript"
	    src="https://maps.google.com/maps/api/js?sensor=false">
		<script type="text/javascript" src="./js/jquery-1.4.2.js"></script>
<script type='text/javascript' src="./js/jquery.autocomplete.js"></script>

<link rel="stylesheet" href="styles/bootstrap-responsive.css" media="screen" />
<link rel="stylesheet" href="styles/bootstrap.css" media="screen" /><!--added for bootstrap-->
<link rel="stylesheet" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />

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
						<li class="active"><a href="#pagewidth"><span>About MP</span></a></li>
						<li><a href="#result"><span>2 columns</span></a></li>
						<li><a href="#threeColumnLayout"><span>3 columns</span></a></li>
						<li><a href="#boxes"><span>boxes</span></a></li>
						<li><a href="#testiomonialsTab"><span>testimonials</span></a></li>
						<li><a href="#contactUs"><span>Contact us</span></a></li>
					</ul>
				</nav>
			</div>
		</header>
		<div id="content">
			<section class="row">
				<div class="center">
					<h2><font color="Black"><u>Search Member of Parliament</u></font></h2>
                      <h3><u>By Alphabet</u></h3>
									<div class="buttons">
						
					
		<?php
try {

 $objDb = new PDO('mysql:host=localhost;dbname=test', '', '');
 $objDb->exec('SET CHARACTER SET utf8');

 
 $sql = "SELECT DISTINCT alpha
  FROM `abcd`";
 $statement = $objDb->query($sql);
 $list = $statement->fetchAll(PDO::FETCH_ASSOC);

 } catch(PDOException $e) {
 echo 'There was a problem';
 }
?>

	    

 


<form action="myprocess2.php" method="post">
<select name="variable" id="alpha" class="update">
        <option value="">Select Alphabet</option>
        <?php if (!empty($list)) { ?>
            <?php foreach($list as $row) { ?>
                <option value="<?php echo $row['alpha']; ?>">
                    <?php echo $row['alpha']; ?>
                </option>
            <?php } ?>
        <?php } ?>
    </select>	

	<select name="variable" id="name" class="update">
	    <option value="">Select Name</option>
	</select>


<input type="submit" value="submit">






	</form>




<script src="ajax.js" ></script>

<br>
					
				<h2><font color="Black"><u>OR</u></h2><br>	
						

					
					
						
						
						
						
						<script type="text/javascript">
$().ready(function() {
	$("#state").autocomplete("autoCompleteMain.php", {
		width: 150,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
});
</script>
</head>
<body>

<div id="content">
	<form action="myprocess22.php" method="post" autocomplete="on">
		<p>
			<b>Enter Constituency Name </b><label>:</label>
			<input type="text" name="state" id="state" />
		</p>
		<input type="submit" value="Submit" />
		
	</form>
</div>
</body>
					


					
					
					</div>
				</div>
			</section>
			<section id="result" class="row grey">
				<div class="center">
					
					
					<div id="display"></div>
				</div>
			</section>
			<section id="threeColumnLayout" class="row">
				<div class="center">
					<h1>Three Column Layout</h1>
					<strong class="subHeading">lorem ipsum dolor sit amet, consectetur adipiscing elit</strong>
					<div class="columns">
						<div class="oneThird">
							<div class="imgHolder fullWidth"><img src="img/content03.jpg" alt="image" /></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, tortor vel vehicula pharetra, massa <a href="#">tellus elementum</a> nunc, eu pulvinar urna risus a orci.</p>
							<p>Ut scelerisque, sapien in luctus ultrices, magna ante convallis orci</p>
						</div>
						<div class="oneThird">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, tortor vel vehicula pharetra, massa tellus elementum nunc.</p>
							<ul>
								<li>Lorem ipsum dolor sit amet, consectetur </li>
								<li>adipiscing elit. In luctus, tortor vel</li>
								<li>pharetra, massa tellus elementum nunc</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, tortor vel vehicula pharetra, massa tellus. </p>
							<p>In luctus, tortor vel vehicula pharetra, massa tellus. S ss fit amet, consectetur adipiscing elit. </p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, tortor vel vehicula pharetra, massa tellus. </p>
						</div>
						<div class="oneThird">
							<div class="imgHolder alignLeft"><img src="img/content05.jpg" alt="image" /></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, tortor vel vehicula pharetra, massa tellus.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, tortor vel vehicula pharetra, massa tellus elementum nunc, eu pulvinar urna risus a orci.</p>
							<p>Ut scelerisque, sapien in luctus ultrices, magna ante convallis orci, vel iaculis massa sapien sed risus.</p>
							<p>Ut scelerisque, sapien in luctus ultrices, magna ante convallis orci, vel iaculis massa sapien sed risus.</p>
							<p>Ut scelerisque, sapien in luctus ultrices, magna ante convallis orc.</p>
						</div>
					</div>
				</div>
			</section>
			<section id="boxes" class="row grey">
				<div class="center">
					<h1>Information Boxes</h1>
					<strong class="subHeading">lorem ipsum dolor sit amet, consectetur adipiscing elit</strong>
					<div class="columns">
						<article class="news oneThird">
							<div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<div class="content">
									<a href="#" class="imgHolder fullWidth"><img src="img/img-news01.jpg" alt="" /></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, tortor vel vehicula pharetra.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
								<div class="readMore"><a href="#" class="btn btnSmall"><span>Read More</span></a></div>
							</div>
						</article>
						<article class="news oneThird">
							<div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<div class="content">
									<a href="#" class="imgHolder fullWidth"><img src="img/img-news01.jpg" alt="" /></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, tortor vel vehicula pharetra.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
								<div class="readMore"><a href="#" class="btn btnSmall"><span>Read More</span></a></div>
							</div>
						</article>
						<article class="news oneThird">
							<div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<div class="content">
									<a href="#" class="imgHolder fullWidth"><img src="img/img-news01.jpg" alt="" /></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, tortor vel vehicula pharetra.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
								<div class="readMore"><a href="#" class="btn btnSmall"><span>Read More</span></a></div>
							</div>
						</article>
					</div>
				</div>
			</section>
			<section id="testiomonialsTab" class="row">
				<div class="center">
					<h1>Testimonials</h1>
					<strong class="subHeading">lorem ipsum dolor sit amet, consectetur adipiscing elit</strong>
					<div id="testimonials" class="gallery">
						<ul class="slides">
							<li>
								<div class="row">
									<blockquote>
										<q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, tortor vel vehicula pharetra, massa tellus elementum nunc, eu pulvinar </q>
									</blockquote>
									<blockquote>
										<q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, tortor vel vehicula pharetra, massa tellus elementum nunc, eu pulvinar </q>
									</blockquote>
								</div>
								<div class="row">
									<blockquote>
										<q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, tortor vel vehicula pharetra, massa tellus elementum nunc, eu pulvinar </q>
									</blockquote>
									<blockquote>
										<q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, tortor vel vehicula pharetra, massa tellus elementum nunc, eu pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, tortor vel vehicula pharetra, mas</q>
									</blockquote>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<section id="contactUs" class="row grey">
				<div class="center">
					<h1><u>Contact Us</u></h1>
					
					<div class="columns">
						<div class="half">
							<form method="post" action="form.php" class="form contact-form">
								<fieldset>
									<h2>Feedback form</h2>
									<div id="message"></div>
									<div class="formRow">
										<div class="textField"><input type="text" name="name" id="name" placeholder="Your name ..." /></div>	
									</div>
									<div class="formRow">
										<div class="textField"><input type="text" name="email" id="email" placeholder="Your Email ..." /></div>
									</div>
									<div class="formRow">
										<div class="textField"><textarea cols="20" name="comment" id="comment" rows="4" placeholder="Your Comment ..."></textarea></div>
									</div>
									<div class="formRow">
										<button class="btnSmall btn submit right">
											<span>Send Message</span>
										</button>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="half">
							<h2>How to find us</h2>
							<div id="map">
								<div class="imgHolder"> <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Sansad+Bhavan,+New+Delhi,+Delhi&amp;aq=0&amp;oq=sansad+bhavan+new+delhi&amp;sll=20.983588,82.752628&amp;sspn=45.458666,86.572266&amp;ie=UTF8&amp;hq=Sansad+Bhavan,+New+Delhi,+Delhi&amp;ll=28.617172,77.207798&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Sansad+Bhavan,+New+Delhi,+Delhi&amp;aq=0&amp;oq=sansad+bhavan+new+delhi&amp;sll=20.983588,82.752628&amp;sspn=45.458666,86.572266&amp;ie=UTF8&amp;hq=Sansad+Bhavan,+New+Delhi,+Delhi&amp;ll=28.617172,77.207798&amp;spn=0.006295,0.006295&amp;t=m" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<footer id="footer">
			<div class="center">
				<span class="copy">Created by <a href="http://webcodebuilder.com">WebCodeBuilder.com</a></span>
				Subscribe to our <a href="http://webcodebuilder.com/feed/">blog</a> and follow us on <a href="https://twitter.com/#!/webcodebuilder">Twitter</a>
			</div>
		</footer>
	</div>
</body>
</html>