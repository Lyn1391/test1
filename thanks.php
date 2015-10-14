<?php
    if(isset($_POST['submit'])){
      $file = "data.json";
      $json_string = json_encode($_POST,JSON_PRETTY_PRINT);
      file_put_contents($file,$json_string,FILE_APPEND);
      header('Location:thanks.php');
    }
?>

<!DOCTYPE html>

<head>

	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Example of the Responsive Grid System</title>
	<meta name="description" content="This is the Responsive Grid System, a quick, easy and flexible way to create a responsive web site.">
	<meta name="keywords" content="responsive, grid, system, web design">

	<meta name="author" content="www.grahamrobertsonmiller.co.uk">

	<meta http-equiv="cleartype" content="on">

	<link rel="shortcut icon" href="/favicon.ico">

	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Stylesheets -->
	<link rel="shortcut icon" href="/favicon.ico"><!-- Stylesheets -->
	<link rel="stylesheet" href="css/base.css" media="all">
	

	

</head>

<body>

	<div class="section group">
		<div class="col span_1_of_10">		
		</div>
		<div class="col spanSpecial">
			<a href="index.html"><img  src="img/logo.png" style="text-align:center;" width="20%" border="0">
			</a>
			<p style="font-size:1.5em;">Horoscope & Signs</p>
		</div>
		<div class="col span_1_of_10">		
		</div>
	</div>

						
	<div class="section group">
		<div class="col span_1_of_10">		
		</div>
					
		<div class="section group">
			<div class="col span_1_of_10">			
			</div>
			<div class="col spanSpecial">
				<div id="itemsTable1">
					<div id="contentWrapper">
						<article id="mainContent">
							<h1>Thank you!</h1>
						</article>
						<article class="post">
	      					<h2>Your info helps make RA better</h2>
	      					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non  mauris orci, quis tincidunt sapien. Vestibulum sodales est ut diam  tincidunt non bibendum dui cursus. </p>
	      					<p>&nbsp;</p>
	  					</article>
	        		</div>
				</div>
			</div>
		</div>
						
		<div class="col span_1_of_10">
		</div>
	</div>

	<div class="section group">
		<div class="footer">
			<div class="col span_8_of_8">
				&copy 2015 ZACA Inc. All Copyright Reserved
			</div>
		</div>
	</div>

</body>


				

</html>