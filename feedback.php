<!DOCTYPE html>
<html lang="en" >
	<head>
	<title>EquiTech Studios</title>
	<meta name="description" content="EquiTech Studios Feedback Complete" />
	<meta name="keywords" content="EquiTech Studios, feedback complete, will contact soon" />
	<meta name="author" content="Group 2" />
	<meta charset="utf-8">		
	<link rel="stylesheet" href="EquiTech.css" type="text/css" />
	<link href="EquiTechMobile.css" rel="stylesheet" media="only screen and (max-device-width: 480px)">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">		
	<!-- protect other browsers from IE's quirks -->
	<!--[if IE]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
	</script>
	<link rel="stylesheet" type="text/css" href="ie.css" />
	<![endif]-->	
  	</head>
	<body>
	<div class="wrapper">
	<div class="logo"><a href="index.html"><img src="cod4-multiplayer.jpeg" class="logo" alt="Logo"></a>
	</div>
			<header>
			<hgroup>
			<h1>EquiTech Studios</h1>
				<h2>Gaming is our passion</h2>					
			</hgroup>
					<form id="gsearch" action="http://studentweb.maconstate.edu/john.wright2/Group_Project2_final/search.html">
					  <input value="015502771783107399443:ycdgt0vs6mc" name="cx" type="hidden"/>
					  <input name="q" type="search" placeholder="Search the site" />
					  <input value="Go" name="sa" type="submit"/>
					</form>	
			</header>
		<nav>
			<ul>
			  <li><a href="index.html">Home</a></li>
			  <li><a href="nothingness.html">Nothingness</a></li>
			  <li><a href="nothingness2.html">Nothingness 2</a></li>
			  <li><a href="inproduction.html">Project"Unknown"</a></li>
			  <li><a href="media.html">Media</a></li>		  
			  <li><a href="donate.html">Donate</a></li>
			</ul>
		</nav>			
			<section class="content">
					<form method="POST" action="feedback.php">
					  <label for="myFName">First Name:</label>
					  <input type="text" name="myFName" id="myFName" required="required">
					  <label for="myLName">Last Name:</label>
					  <input type="text" name="myLName" id="myLName" required="required">
					  <label for="myEmail">E-mail:</label>
					  <input type="email" name="myEmail" id="myEmail" required="required">
					  <label for="myPhone">Phone:</label>
					  <input type="tel" name="myPhone" id="myPhone">		  
					  <label for="myComments">Comments:</label>
					  <textarea name="myComments" id="myComments" rows="2" cols="20"></textarea>
					  <label for="human">*What is 2+2? (Anti-spam)</label>
					  <input id="human" type="text" name="human" placeholder="Type Here">					  
					  <input id="mySubmit" name="mySubmit" type="submit" value="Submit">
					</form>
					
						<div id="formResponse">
						<?php

								//Declare and check form vars
								if (isset($_POST["myFName"])) 
								{
								  $fname = $_POST["myFName"];
								  //echo $fname;
								  //echo " is your First Name";
								} 
								else 
								{
								  $fname = null;
								  //echo "no First Name supplied";
								}
								
								if (isset($_POST["myLName"])) 
								{
								  $lname = $_POST["myLName"];
								 // echo $lname;
								 // echo " is your Last Name";
								} 
								else 
								{
								  $lname = null;
								 // echo "no Last Name supplied";
								}
								
								if (isset($_POST["myPhone"])) 
								{
								  $phone = $_POST["myPhone"];
								//  echo $phone;
								//  echo " is your Phone";
								} 
								else 
								{
								  $phone = null;
								//  echo "no Phone Number supplied";
								}	
								
								if (isset($_POST["myEmail"])) 
								{
								  $email = $_POST["myEmail"];
								//  echo $email;
								//  echo " is your Email Name";
								} 
								else 
								{
								  $email = null;
								//  echo "no Email supplied";
								}			
								
								if (isset($_POST["myComments"])) 
								{
								  $message = $_POST["myComments"];
								//  echo $message;
								//  echo " is your Comment";
								} 
								else 
								{
								  $message = null;
								//  echo "no Comment supplied";
								}							
								
								if (isset($_POST["myEmail"])) 
								{
								  $from = $_POST["myEmail"];
								//  echo $from;
								//  echo " is your From email";
								} 
								else 
								{
								  $from = null;
								//  echo "no From Email supplied";
								}	

								$to = 'equitechstudios@gmail.com'; 
								$subject = 'Equitech Studios Web Message';
								
								if (isset($_POST["human"])) 
								{
								  $human = $_POST["human"];
								  //echo $human;
								  //echo "is your Human input";
								} 
								else 
								{
								  $human = null;
								//  echo "no Human supplied";
								}	

								if (isset($_POST["mySubmit"])) 
								{
								  $mySubmit = $_POST["mySubmit"];
								 // echo $mySubmit;
								//  echo " is your Submit button";
								} 
								else 
								{
								  $mySubmit = null;
								//  echo "no Submit Button";
								}							
								
								//message body
								$body = "From: $fname $lname\n Phone: $phone\n E-Mail: $email\n Message:\n $message";
								
								//test if submit and required fields not null
								if ($mySubmit) {
									if ($fname != '' && $lname != '' && $email != '') {
										if ($human == '4') {				 
											if (mail ($to, $subject, $body, $from)) { 
											echo '<h2> We will be contacting you soon! </h2> <br> <p>Your message has been sent!</p>';
										} else { 
											echo '<p>Something went wrong, go back and try again!</p>'; 
										} 
									} else if ($mySubmit && $human != '4') {
										echo '<p>You answered the anti-spam question incorrectly!</p>';
									}
									} else {
										echo '<p>You need to fill in all required fields!!</p>';
									}
								}

					?>
					</div>
			</section>		

			
			<footer>
					<ul>
					  <li class="nodec">Contact Us</li>
					  <li><a href="mailto:eric.anderson1@maconstate.edu">Eric Anderson</a><br></li>
					  <li><a href="mailto:john.wright2@maconstate.edu">John Wright</a></li>
					</ul>

					<ul>
					  <li class="nodec">Favorite Links</li>
					  <li><a href="http://us.battle.net/d3/en/?-">Diablo 3</a></li>
					  <li><a href="http://www.rockstargames.com/V/">Grand Theft auto V</a></li>
					  <li><a href="http://www.elderscrolls.com/skyrim/">The Elder Scrolls - Skyrim</a></li>
					  </ul>

					  <ul>
					  <li class="nodec">Site Links</li>
					  <li><a href="index.html">Home</a></li>
					  <li><a href="nothingness.html">Nothingness</a></li>
					  <li><a href="nothingness2.html">Nothingness 2</a></li>
					  <li><a href="inproduction.html">Project"Unknown"</a></li>
					  <li><a href="media.html">Media</a></li>				  
					  <li><a href="donate.html">Donate</a></li>
					</ul>

				 <p id="footerCenter">All rights are reserved by their respected enities. Copyright &copy; 2012</p>
			</footer>		
				<!-- div for siteim chat image -->
				<div id="SITEHELP_CONTAINER_175" class="SITEHELP_CONTAINER_175"></div> 
	</div>
			<!-- JavaScript for siteim chat -->
			<script type="text/javascript"> document.write('<scri' + 'pt type="text/javas' + 'cript" language="javas' + 'cript" src="' + top.location.protocol + '//c.sitehelp.im/code.cgi?c=175' + (top.location.protocol=='http:' ? '' : '&ssl=1') + '&rnd=' + Math.random() + '"></sc' + 'ript>'); </script>
			<!-- Google Analytics -->
			<script type="text/javascript">
			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-36404311-1']);
			  _gaq.push(['_trackPageview']);

			  (function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();
			</script>
</body>
</html>

