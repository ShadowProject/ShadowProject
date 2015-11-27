<?php include "_head.php" ?>

	<title>Contact &bull; Shadow Project</title>
	<meta property="og:title" content="Contact &bull; Shadow Project" />
	<meta property="og:description" content="The Shadow Project is an open source project aiming to be the core of privacy, where people will build decentralized applications" />
	<meta property="og:url" content="http://shadowproject.io/contact" />
</head>
<body>


<?php include "_header.php" ?>


<div class="row">
	<div class="medium-4 large-3 columns">


		<div id="sidebar">
			<ul class="nav">
				<li><a href="introduction">Introduction</a></li>
				<li><a href="getting-started">Getting started</a></li>
				<li><a href="features">Features</a></li>
				<li><a href="documentation">Documentation</a></li>
				<li><a href="development">Development</a></li>
				<li><a href="bug-bounties">Bug Bounties</a></li>
				<li><a href="community">Community</a></li>
				<li><a href="faq">FAQ</a></li>
				<li><a class="active" href="contact">Contact</a></li>
			</ul>
			<?php include "_sidebar.php" ?>
		</div><!-- #sidebar -->


	</div>
	<div class="medium-8 large-9 columns">


		<div id="content">
			<h2>Contact us</h2>
			<p>
				Get in touch with the team:
			</p>

			<form method="post" action="submit.php" class="contact">
				<textarea name="message" rows="8" placeholder="Your message"></textarea>
				<input type="text" name="name" value="" placeholder="Name">
				<input type="email" name="email" value="" placeholder="Email">
				<input class="hide" type="url" name="url" value="" placeholder="Leave this empty">
				<input type="submit" class="button" name="send" value="Send message">
			</form>

		</div><!-- #content -->


	</div>
</div>


<?php include "_footer.php" ?>
