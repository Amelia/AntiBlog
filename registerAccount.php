<html>
<head>
	<title>anti-blog</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">


	<?php
		include 'createAccountHead.php';
   		include "anti_xss.php";

    		$name = anti_xss($_POST['username']);
    		$pw = $_POST['password'];

		//    $name=mysqli_real_escape_string($db,$name);
		//    $pw=mysqli_real_escape_string($db,$pw);

    		$connection = new Mongo();
    		$db = $connection->antiblog;
    		$collection = $db->users;

    		$cursor = $collection->find();
    		$error = FALSE;
    		foreach($cursor as $obj){
        		if($obj["username"] == $name){
            			$error = TRUE;
        		}
    		}

				//ensure name is still non-empty after running anti_xss
				if($name == "")
					$error = TRUE;

    		if($error == FALSE){
        		$obj= array("username"=>$name, "password" => sha1($pw), "joined" => date('D, d M Y H:i:s T'));
        		$collection->insert($obj);
   	    	}
	?>

    <div id="page">
	<div class="inner_copy">Best selection of premium <a href="http://www.templatemonster.com/pack/joomla-1-6-templates/">Joomla 1.6 templates</a></div>
		<div id="page-bgtop">
			<div id="page-bgbtm">
            			<?php if($error){
               				echo "<h1>ERROR ADDING TO DATABASE</h1>";
											echo 'You entered: ',$username,'<br>';
											echo "<br>";
											echo "Some reasons you're getting this error include:<br><ul>";
											echo "<li>your username is already taken</li>";
											echo "<li>your username had invalid special characters or HTML tags</li>";
											echo "<li>you didn't enter a username</li>";
											echo "<li>you put leading/trailing spaces that were removed causing one of the above</li>";
											echo "</ul>";
            			}else{
               				echo"<p>Thank you ".$name. ", your account has been successfully created!</p>";
               				echo"<p><a href=\"index.php\">Click here</a> to return to the home page</p>";
            			}?>
				<div style="clear:both">&nbsp;</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
