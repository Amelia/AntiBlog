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
				<?php
				if($_GET['username']!=null){
					$username = $_GET['username'];
				}else{
					$username = $_SESSION['name'];
				}
			                include "header.php";
               				include "anti_xss.php";

                			$name = anti_xss($_SESSION['name']);

                			$connection = new Mongo();
                			$db = $connection->antiblog;
                			$collection = $db->blog;

					//$title = $collection->find();
					
					//$queryName = array("body" => "");
					$query = array("username"=> $username);
                			$cursor = $collection->find($query);
					//$date = $collection->find();
				?>
				<?php
				foreach($cursor as $obj){
				?>
				<div class="post">
					<h2 class="title"><a href="#">
					<?php
						 echo''.$obj ['title'].'';
					?></a></h2>

					<p class="meta"><span class="date"><?php echo''.$obj['date'].'';?></span><span class="posted">Posted by: <a href="#"><?php echo $obj['username'] ?></a></span></p>							
					<div style="clear:both">&nbsp;</div>
						<div class="entry">
							<?php
								
								echo''.$obj['body'].'' ;
							
							?>
						</div>
					</div>
					<div style="clear:both">&nbsp;</div>
				</div>
					<?php  } ?>
			</div>
		</div>
	</div>
</div>
<div id="footer"><div class="fleft"><p>Copyright statement.</p></div><div class="fright"><p>More <a href="http://www.websitetemplatesonline.com" title="WTO - website templates and Flash templates">Free Website Templates</a> at WTO</p></div><div class="fcenter"><p>Design by: Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a></p></div><div class="fclear"></div></div>
</body>
</html>
