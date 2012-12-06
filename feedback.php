<!DOCTYPE html>
<html lang="en">
<head>
<title>EquiTech Studios</title>
<meta name="description" content="EquiTech Studios Feedback Complete" />
<meta name="keywords" content="EquiTech Studios, feedback complete, will contact soon" />
<meta name="author" content="Group 2" />
<meta charset="utf-8">
<link href="css/EquiTech.css" rel="stylesheet" />
<link href="css/jquery-ui-1.9.2.custom.css" rel="stylesheet" />
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.min.js"></script>
<script src="js/FeedBack.js"></script>

<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>

<script>
    $(function() {
        $( "input[type=submit],button,input[type=reset],input[type=button]" )
            .button()
            .click(function( event ) {
            });
	});
</script>
 <script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'blackglass'
 };
 </script>
</head>
<body>
<div class="wrapper">

	<header class="headerHeight">
		<div class="logo"><a href="index.html"><img src="cod4-multiplayer.png" class="logo" alt="Logo"></a>
		</div>
		<hgroup>
		<h1><img src="Equitechlogo.png" class="text" alt="Text logo"></h1>
			<h2><img src="Gaminglogo.png" class="text" alt="Text logo gaming"></h2>
		</hgroup>
		<form id="gsearch" action="http://studentweb.maconstate.edu/john.wright2/Group_Project2_final/search.html">
		  <input value="015502771783107399443:ycdgt0vs6mc" name="cx" type="hidden"/>
		  <input name="q" type="search" placeholder="Search the site" accesskey="s" class="textInput"/>
		  <input value="Go" name="sa" type="submit" class="searchbutton" />
		</form>
	</Header>

		<nav id="navbar">
		 <ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="games.html">Games</a>
			  <ul>
				  <li><a href="nothingness.html">Nothingness</a></li>
				  <li><a href="nothingness2.html">Nothingness 2</a></li>
				  <li><a href="inproduction.html">Project "Unknown"</a></li>
			  </ul>
			</li>
			<li><a href="media.html">Media</a>
			 <ul>
			 	  <li><a href="medianothingness.html">Nothingness</a></li>
			 	  <li><a href="medianothingness2.html">Nothingness 2</a></li>
			 	  <li><a href="mediaunknown.html">Project "Unknown"</a></li>
			 </ul>
			</li>
			<li><a href="donate.html">Donate</a>
			</li>
			<li><a href="contactus.html">Contact Us</a>
			  <ul>
				<li><a href="mailto:eric.anderson1@maconstate.edu">Eric Anderson</a></li>
				<li><a href="mailto:kevin.hawkins@maconstate.edu">Kevin Hawkins</a></li>
				<li><a href="mailto:john.wright2@maconstate.edu">John Wright</a></li>
			  </ul>
			</li>
		  </ul>
		</nav>

				<div id="feedBackContainer">
					<button id="feedBackButton" class="feedBackButtonRight" onclick="showRecaptcha();" accesskey="f">FeedBack</button>
					<div id="feedBackFormContainer"  class="floatRight">
						<div id="feedBackDialogForm" title="FeedBack">

							<form method="POST" action="feedback.php">
								<fieldset class="ui-dialog-content ui-widget-content ui-corner-all">
								  <legend class="ui-widget-header ui-corner-top"> Please Email Us! </legend>
								  <div id="feedBackTextFName" class="floatLeft">
									  <label for="myFName">First Name:</label>
									  <input type="text" name="myFName" id="myFName" required="required" class="ui-state-default ui-corner-all textInput">
								  </div>
								  <div id="feedBackTextLName" class="floatRight">
									  <label for="myLName">Last Name:</label>
									  <input type="text" name="myLName" id="myLName" required="required" class="ui-state-default ui-corner-all textInput">
								  </div>
								  <div id="feedBackTextEmail" class="clear floatLeft">
									  <label for="myEmail">E-mail:</label>
									  <input type="email" name="myEmail" id="myEmail" required="required" class="ui-state-default ui-corner-all textInput">
								  </div>
								  <div id="feedBackTextPhone" class="floatRight">
									  <label for="myPhone">Phone:</label>
									  <input type="tel" name="myPhone" id="myPhone" class="ui-state-default ui-corner-all textInput">
								  </div>
								  <div id="feedBackTextComment" class="clear">
									  <label for="myComments">Comments:</label>
									  <textarea name="myComments" id="myComments" rows="2" cols="40" class="ui-state-default ui-corner-all textInput"></textarea>
								  </div>
								  <div id="human">
									   <?php
										  require_once('recaptchalib.php');
										  $publickey = "6LdmvNkSAAAAAFDwVdqw7oG7wC4JPbs6etqm6qVZ"; // you got this from the signup page
										  echo recaptcha_get_html($publickey);
										?>

								  </div>
									  <div id="feedBackSubmitButton">
										  <input id="mySubmit" name="mySubmit" type="submit" value="Submit" class="floatLeft">
										  <input id="myReset" name="myReset" type="reset" value="Reset" class="floatRight">
   									  </div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			<section class="content">
				<h2>Thank you for your contribution.</h2>
					<!--[if lt IE 8]>
						<p class="chromeframe">The Browser you are using is outdated and may not work well with this site. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
					<![endif]-->			
					<div id="formResponse">
						<?php
								//Declare and check form vars
								if (isset($_POST["recaptcha_challenge_field"]))
									{
									  $recaptcha_challenge_field = $_POST["recaptcha_challenge_field"];
									  //echo $recaptcha_challenge_field;
									  //echo " is your First Name";
									}
									else
									{
									  $recaptcha_challenge_field = null;
									  //echo "no recaptcha_challenge supplied";
									}

									if (isset($_POST["recaptcha_response_field"]))
									{
									  $recaptcha_response_field = $_POST["recaptcha_response_field"];
									 // echo $recaptcha_response_field;
									 // echo " is recaptcha_response_field";
									}
									else
									{
									  $recaptcha_response_field = null;
									 // echo "no recaptcha_response_field";
									}
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

							//recaptcha
							  require_once('recaptchalib.php');
							  $privatekey = "6LdmvNkSAAAAAFgPUooH7thesa3BbvB9SkxQlTVL";
							  if($recaptcha_response_field != null){
							  $resp = recaptcha_check_answer ($privatekey,
															$_SERVER["REMOTE_ADDR"],
															$recaptcha_challenge_field,
															$recaptcha_response_field);
															}else{
															}




								$to = 'equitechstudios@gmail.com';
								$subject = 'Equitech Studios Web Message';


								//message body
								$body = "From: $fname $lname\n Phone: $phone\n E-Mail: $email\n Message:\n $message";

								//test if submit and required fields not null
								if ($mySubmit) {
									if ($fname != null && $lname != null && $email != null && $recaptcha_response_field != null) {
										if ($resp->is_valid) {
											if (mail ($to, $subject, $body, $from)) {
											echo '<h2> We will be contacting you soon! </h2> <br> <p>Your message has been sent!</p>';
										} else {
											echo '<p>Something went wrong, go back and try again!</p>';
										}
									} else if ($mySubmit && !$resp->is_valid) {
										echo "<p>The reCAPTCHA wasn't entered correctly.</p> <br> <p>Go back and try it again.</p>";
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
				  <li><a href="mailto:kevin.hawkins@maconstate.edu">Kevin Hawkins</a></li>
				  <li><a href="mailto:john.wright2@maconstate.edu">John Wright</a></li>
				</ul>
				<ul>
				  <li class="nodec">Favorite Links</li>
				  <li><a href="http://us.battle.net/d3/en/?-">Diablo 3</a></li>
				  <li><a href="http://us.battle.net/sc2/en/">Starcraft 2</a></li>
				  <li><a href="http://www.rockstargames.com/V/">Grand Theft auto V</a></li>
				  <li><a href="http://www.elderscrolls.com/skyrim/">The Elder Scrolls - Skyrim</a></li>
				  <li><a href="http://www.callofduty.com/">Call of Duty</a></li>
				  <li><a href="http://blog.counter-strike.net/">Counter Strike</a></li>
				</ul>
				<ul>
				  <li class="nodec">Site Links</li>
				  <li><a href="index.html">Home</a></li>
				  <li><a href="games.html">Games</a></li>
				  <li><a href="media.html">Media</a></li>
				  <li><a href="donate.html">Donate</a></li>
				  <li><a href="feedback.php">Feedback</a></li>
				</ul>
				<ul>
				  <li class="nodec">Game Links</li>
				  <li><a href="nothingness.html">Nothingness</a></li>
				  <li><a href="nothingness2.html">Nothingness 2</a></li>
				  <li><a href="inproduction.html">Project "Unknown"</a></li>
				</ul>
				<ul>
				  <li class="nodec">Media Links</li>
				  <li><a href="medianothingness.html">Nothingness</a></li>
				  <li><a href="medianothingness2.html">Nothingness 2</a></li>
			 	  <li><a href="mediaunknown.html">Project "Unknown"</a></li>
			 	</ul>

			<p class="footerCenter clear">All rights are reserved by their respected enities. Copyright &copy; 2012</p>
			<p class="footerCenter">Page last modified: <script> document.write(document.lastModified);</script></p>
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