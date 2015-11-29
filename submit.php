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

<?php include "_head.php" ?>

	<title>Message sent &bull; Shadow Project</title>
</head>
<body>


<?php include "_header.php" ?>

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

<?php include "_footer.php" ?>
