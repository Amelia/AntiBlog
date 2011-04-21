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


	<div id="page"><div class="inner_copy"><div class="inner_copy">Best selection of premium <a href="http://www.templatemonster.com/pack/joomla-1-6-templates/">Joomla 1.6 templates</a></div></div>
		<div id="page-bgtop">
			<div id="page-bgbtm">
<?php
if($_SESSION['name'] == '')
{ echo 'Please log in to create a post.';}
else{
?>
		<!-- Clear the text area when it's clicked -->
		<script type=text/javascript language=JavaScript>
			function clearText(arg){
				var txt = arg;
				document.getElementById(arg).value ="";
			}
		</script>
                <form action=addBlogController.php method=post name=addBlog>
				<div class="post">
					<h2 class="title"><input type="text" name="title" size=100 value="Untitled" style='width:100%;'></h2>
					<p class="meta"><span class="date">(Date/time will auto-set when you submit.)</span><span class="posted">Posted by: <?php echo $_SESSION['name'] ?></span></p>							
					<div style="clear:both">&nbsp;</div>
						<div class="entry">
						<textarea id="blgpst" name=body rows=10 cols=75 style='width:100%;' onfocus="clearText('blgpst')">Your text here.</textarea>
						</div>
						<input type=submit value="Post new blog!">
					</div>
					<div style="clear:both">&nbsp;</div>
				</div>
			</div>
		</div>
<?php } ?>
	</div>
</div>
<div id="footer"><div class="fleft"><p>Copyright statement.</p></div><div class="fright"><p>More <a href="http://www.websitetemplatesonline.com" title="WTO - website templates and Flash templates">Free Website Templates</a> at WTO</p></div><div class="fcenter"><p>Design by: Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a></p></div><div class="fclear"></div></div>
</body>
</html>
