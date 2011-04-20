<html>
<head>
	<title>anti-blog</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<?php
		include 'createAccountHead.php';
//    phpinfo();
	?>

    <div id="page"><div class="inner_copy"><div class="inner_copy">Best selection of premium <a href="http://www.templatemonster.com/pack/joomla-1-6-templates/">Joomla 1.6 templates</a></div></div>
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div class="post">
					<h2 class="title">Please provide us with the following information in order to create your account. A unique username is required.</h2>
					<p class="meta"><span class="date">&nbsp;</span><span class="posted">&nbsp;</span></p>
					<div style="clear:both">&nbsp;</div>
						<div class="entry">
							<script type="text/javascript" language="JavaScript" src="scripts/formValidate.js"></script>
							<form method="post" id="create" action="registerAccount.php" onsubmit="return formValidate('create', 'username', 'password', 'confirmation')">
								<label for="username">Username:</label>
								<input type="text" id="username" name="username" /><br />
								<label for="password">Password:</label>
								<input type="password" id="password" name="password" /><br />
								<label for="confirmation">Confirmation:</label>
								<input type="password" id="confirmation" name="confirmation" /><br /><p></p>

								<input type="submit" value="Register" name="submit" />
							</form>
						</div>
					</div>
					<div style="clear:both">&nbsp;</div>
				</div>
			</div>
		</div>

<h1></h1>




	<div>
<body>

</div>
</body>
</html>
