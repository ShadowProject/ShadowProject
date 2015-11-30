<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'contact@shadowproject.io';

	// prepare a "pretty" version of the message
	// Important: if you added any form fields to the HTML, you will need to add them here also
	$body = "
From: $_POST[name] ($_POST[email])

--------------

$_POST[message]";

	// Use the submitters email if they supplied one
	// (and it isn't trying to hack your form).
	// Otherwise send from your email address.
	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	// finally, send the message
	mail($youremail, 'Mail from Shadowproject.io', $body, $headers );

}

// otherwise, let the spammer think that they got their message through

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link href="favicon.ico" rel="icon" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://shadowproject.io/img/sdc-sharing_promo.png" />
	<link rel="stylesheet" href="css/shadowproject.nested.css">
	<title>Message sent &bull; Shadow Project</title>
</head>
<body>


<div id="header">
	<div class="row">
		<div class="column">
			<div class="logo">
				<h1 class="logotype"><a href="//shadowproject.io">
					<i class="ico cc-SDC-alt"></i>Shadow<span class="red">Project</span><span class="grey">.io</span>
				</a></h1>
			</div>
		</div>
	</div>
</div><!-- #header -->

<div class="row">
	<div class="column">

		<div id="content" class="single-column text-center">
			<h1>Message sent</h1>
			<p>
				Thanks for your message, we'll get back to you as soon as possible.
			</p>
			<a href="/" class="secondary small button">Back to homepage</a>
		</div><!-- #content -->

	</div>
</div>

<div id="footer">
	<div class="row">
		<div class="medium-5 columns">
			<div class="copyright">
				<p>&copy; 2015&ensp;<a href="http://shadowproject.io">shadowproject.io</a><p>
			</div>
		</div>
		<div class="medium-7 columns">
			<div class="links">
				<p>
					<a href="development">Contribute</a>&emsp;&bull;&emsp;<a href="legal">Legal</a><!--&emsp;&bull;&emsp;<a href="privacy">Privacy</a-->
				</p>
			</div>
		</div>
	</div>
</div><!-- #footer -->


	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/shadowproject.js"></script>
</body>
</html>
