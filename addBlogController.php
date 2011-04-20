<?php session_start();

   		include "anti_xss.php";

		//    $name=mysqli_real_escape_string($db,$name);
		//    $pw=mysqli_real_escape_string($db,$pw);

    		$connection = new Mongo();
    		$db = $connection->antiblog;
    		$collection = $db->blog;

            $username = $_SESSION['name'];
            $title = $_POST['title'];
            $body = $_POST['body'];
            $date = date('D, d M Y H:i:s T');

						$obj= array("username"=>$username, "title" => $title, "body" => $body, "date" => $date);
						$collection->insert($obj);

//echo $username;
            header("Location: blog.php");
            exit;

    		/*$cursor = $collection->find();
    		$error = FALSE;
    		foreach($cursor as $obj){
        		if($obj["username"] == $name){
            			$error = TRUE;
        		}
    		}
    		if($error == FALSE){
        		$obj= array("username"=>$name, "password" => sha1($pw));
        		$collection->insert($obj);
   	    	}*/
/*
first
last
interest
dob
about
*/
	?>



