<?php session_start();

if($_GET['username']!=null){
            $username = $_GET['username'];
            $display = true;
        }else if($_SESSION['name']!=null){
            $username = $_SESSION['name'];
            $display = true;
        }

            $connection = new Mongo();
    		$db = $connection->antiblog;
    		$collection = $db->profiles;
            $gridFS = $db->getGridFS();

            $query = array("username"=> $username);
//                    $rangeQuery = array('x' => array( '$gt' => 5, '$lt' => 20 ));
    		$cursor = $collection->find($query);

    		foreach($cursor as $obj){
                $picid = $obj['picid'];
                $picname = $obj['picname'];

    		}
//echo "Hello        ";
//echo $_SESSION['name'];
$image = $gridFS->findOne($picname);
//echo($picid);
// Stream image to browser
header('Content-type: image/jpeg');
echo $image->getBytes();

?>