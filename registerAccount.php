

<html>
<head>
	<title>anti-blog</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<?php
		include 'head.php';
        include "anti_xss.php";

    $name = anti_xss($_POST['username']);
    $pw = $_POST['pw'];

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
    if($error == FALSE){
        $obj= array("username"=>$name, "password" => $pw);
        $collection->insert($obj);
    }


    ?>

    <div id="page"><div class="inner_copy"><div class="inner_copy">Best selection of premium <a href="http://www.templatemonster.com/pack/joomla-1-6-templates/">Joomla 1.6 templates</a></div></div>
		<div id="page-bgtop">
			<div id="page-bgbtm">
            <?php if($error){
               echo "<h1>ERROR ADDING TO DATABASE</h1>";
            }else{
               echo"<p>Thank you ".$name. ", your account has been successfully created!</p>";
               echo"<p><a href=\"index.php\">Click here</a> to return to the home page</p>";
            }?>
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