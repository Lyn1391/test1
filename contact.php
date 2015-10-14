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
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" href="css/base.css" media="all">
  <title>HOROSCOPE & SIGNS</title>
	
</head>

<body>



	<div class="section group">
		<div class="col span_1_of_10">
		</div>

		<div class="col spanSpecial">
			<a href="index.html"><img alt="logo" id="logo" src="img/logo.png" >
			</a>
			<p style="font-size:1.5em;">Horoscope & Signs</p>
		</div>	

		<div class="col span_1_of_10">
		</div>
	</div>


		<div class="col span_1_of_10">
		</div>
				
		<div class="section group">
			<div class="col span_1_of_10">
			</div>
			<div class="col spanSpecial">
					<div id="itemsTable1">

        

               <div id="contentWrapper" >
             <article id="mainContent" >
           <h1 style="font-size:1em; text-align:center;">Tell us about yourself</h1>
            <article class="post">

      <h4 style="font-size:.7em; text-align:center;">The more we know, the more we can help</h4> <br/>
     
    </article>
        <div id="container">
          <form name="form1" method="post">
            <p>
              <label>Name </label>
              <input id="input1" type="text" name="name" placeholder="Your full name" autofocus="autofocus" required="required" pattern="[a-z,A-Z]{0,30}" oninput="check(this);"/>
            </p>
            <br/>
            <p>
              <label>Email </label>
              <input id="input2" type="email" name="email"  placeholder="Email address"  maxlength="40" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" oninput="check2(this);"/>
            </p> 
            <br/>
            <p>
              <label>Cell </label>
              <input id="input3" type="number" name="cell"  placeholder="Your phone numbers" autofocus="autofocus" required="required" min="9" value="1"  oninput="checkNumbers(this);"/>
            </p> <br/>
            <p>
              <label>Date of birth </label>
              <input id="input4" type="date" name="dob"  placeholder="yyyy-mm-dd"  max="2015-05-22" min="2010-01-01" autofocus="autofocus" required="required" />
            </p> <br/>
            
              
            <p style="text-align: center;">
              <input type="submit" name="submit" id="submit" value="Submit">
            </p>
          </form>
        </div>
  </article>
</div>
					<p id="p1"></p>	






					</div>
					</div>
					<div class="col span_1_of_10">
				
					</div>
				</div>


				
				<div class="section group">
					<div class="col span_1_of_8">
					
					</div>
					<div class="col span_1_of_8">
					
					</div>
					<div class="col span_1_of_8">
					
					</div>
					<div class="col span_1_of_8">
					
					</div>
					<div class="col span_1_of_8">
					
					</div>
					<div class="col span_1_of_8">
					
					</div>
					<div class="col span_1_of_8">
					
					</div>
					<div class="col span_1_of_8">
					
					</div>
				</div>




				<div class="section group">
					<div class="footer">
					<div class="col span_8_of_8">
					&copy; 2015 ZACA Inc. All Copyright Reserved
					</div>
					</div>
				</div>

		

</body>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <script src="myscript.js"></script>
  

				

</html>