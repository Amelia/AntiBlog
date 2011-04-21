<?php include 'head.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>anti-blog</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<style type="text/css">
@import "gallery.css";
</style>
</head>
<body>
<div id="wrapper">
	<?php

        $display = false;

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

            $query = array("username"=> $username);
//                    $rangeQuery = array('x' => array( '$gt' => 5, '$lt' => 20 ));
    		$cursor = $collection->find($query);

    		foreach($cursor as $obj){
                $first = $obj["first"];
                $last = $obj["last"];
                $interest = $obj["interest"];
                $dob = $obj["dob"];
                $about = $obj["about"];
                $picid = $obj['picid'];
                $picname = $obj['picname'];

    		}

	?>
	<div id="page"><div class="inner_copy"><div class="inner_copy">Best selection of premium <a href="http://www.templatemonster.com/pack/joomla-1-6-templates/">Joomla 1.6 templates</a></div></div>
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div class="post">
                    <?php if(!$display){ echo "Please log in to view your profile";}else{ ?>
					<table id="profile">
							<th id="user">Username:</th>
							<td><?php echo $username ?></td>
                            <td rowspan=3 id="pic">
                                <?php
                                    // Find image to stream
                                    if($picname != null)
                                    {
                                      ?><img src="uploaded_files/<?php echo $picname ?>" width="300" onclick="document.location.href = 'streamImage.php?username=<?php echo $username?>';"/><?php
                                    }
                                ?>
                            </td>
						<!--	<td rowspan=3 id="pic"> <img src="images/hobbit.jpg" width="225" height="151" alt="Place profile picture here" /></td>-->
						<tr>
							<th>First Name:</th>
							<td><?php echo $first ?></td>
						<tr>
							<th>Last Name:</th>
							<td><?php echo $last ?></td>
						<tr>
							<th>Interests:</th>
							<td><?php echo $interest ?></td>
						<tr>
							<th>Date of Birth:</th>
							<td><?php echo $dob ?></td>
						<tr>
							<th>Description:</th>
							<td><?php echo $about ?></td>
<!--                            <td>--><?php //echo date("m/d/y");?><!--</td>-->
						<tr>
					</table>
					<?php
					if($username == $_SESSION['name'])
					{
					?>
					<table style="text-align:center">
						<tr>
							<td>
								<form action="editProfile.php" method="post">
									<button id="change">Change Profile</button>
								</form>
							</td>
							<td>
								<form action="removeAccount.php" method="post">
								<button id="removeAcc">Delete Account</button>
								</form>
							</td>
					</table>
					<?php
					}
					?>
				</div>
              <?php } ?>
			</div>
		</div>
	</div>
</div>
<div id="footer"><div class="fleft"><p>Copyright statement.</p></div><div class="fright"><p>More <a href="http://www.websitetemplatesonline.com" title="WTO - website templates and Flash templates">Free Website Templates</a> at WTO</p></div><div class="fcenter"><p>Design by: Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a></p></div><div class="fclear"></div></div>
</body>
</html>
