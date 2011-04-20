<?php session_start(); ?>
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
		include 'head.php';
	?>
	<div id="page"><div class="inner_copy"><div class="inner_copy">Best selection of premium <a href="http://www.templatemonster.com/pack/joomla-1-6-templates/">Joomla 1.6 templates</a></div></div>
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div class="users">
					<h2 class="title"><a href="#">anti-blog Profiles </a></h2>
					<p class="meta"><span class="date">April 14, 2011</span><span class="posted">Posted by: <a href="#">Admin</a></span></p>							
					<table border=1 id="users">
						<th>User Name</th><th>Number of Posts</th><th>Register Date</th>
					<?php	$connection = new Mongo();
						$db = $connection->antiblog;
						$collection=$db->users;

						$cursor = $collection->find();
						$found=FALSE;

						//while db has more entries
						foreach($cursor as $obj){
							//if entry is not $_SESSION['name'];
							if($obj["username"] !=$name){

							$query2=array("username"=> $obj["username"]);
							$collection2=$db->blog;
							$cursor2 = $collection2->find($query2);
							$count=0;
							foreach($cursor2 as $obj2)
								$count++;



								//code to make row of table here			
							?>		
       																		
						<tr><td><a href="profile.php?username=<?php echo $obj["username"]?>"><?php echo $obj["username"]?></a></td><td><a href="blog.php?username=<?php echo $obj["username"]?>"><?php echo $count ?> posts</a></td><td>April, 14 2011</td>
						<?php	}
						}?>

</table>
<div style="clear:both">&nbsp;</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footer"><div class="fleft"><p>Copyright statement.</p></div><div class="fright"><p>More <a href="http://www.websitetemplatesonline.com" title="WTO - website templates and Flash templates">Free Website Templates</a> at WTO</p></div><div class="fcenter"><p>Design by: Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a></p></div><div class="fclear"></div></div>
</body>
</html>
