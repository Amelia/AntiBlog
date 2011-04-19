<html>
<head>
	<title>anti-blog</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<?php
		include 'head.php';
	?>
	<div id="page"><div class="inner_copy"><div class="inner_copy">Best selection of premium <a href="http://www.templatemonster.com/pack/joomla-1-6-templates/">Joomla 1.6 templates</a></div></div>
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<?php

				$name = $_POST['username'];
				$pw = $_POST['pw'];

                $connection = new Mongo();
                $db = $connection->antiblog;
                $collection = $db->users;

                $cursor = $collection->find();
                $found = FALSE;
                foreach($cursor as $obj){
                    if($obj["username"] == $name && $obj["password"] == $pw){
                        $found = TRUE;
                    echo "<p>Thanks for logging in, $name</p>\n";
					echo "<p><a href=\"index.php\">Continue</a></p>";

					$_SESSION['name']=$name;
					$_SESSION['pw']=$pw;
                    }
                }
                if($found == FALSE){
                    echo "<td>We're sorry your username or password has illuded us at this time, <br/> please try again.</td>";
                }

			?>
				</div>
			</div>
</div>
</body>
</html>