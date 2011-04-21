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
	<div>
		<script language="javascript" type="text/javascript">
			alert('Please don\'t go!');
		</script>	
		
				
		<?php
			$connection = new Mongo();
			$db = $connection->antiblog;

			$criteria = array('username' => $_SESSION['name']);
			
			$collection=$db->users;
			$cursor = $collection->remove($criteria);
		
			$collection=$db->profiles;
			$cursor = $collection->remove($criteria);
			
			$collection=$db->blog;
			$cursor = $collection->remove($criteria);

			session_start();
			session_destroy();
			include 'index.php';
		?>
	</div>
</div>
</body>
</html>
