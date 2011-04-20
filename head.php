<?php
session_start();
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?>
<script type="text/javascript" language="JavaScript" src="scripts/formValidate.js"></script>
<div id="header">
		<div id="logo">
			<h1><a href="index.php">anti-blog </a></h1>
			<p><i>let's talk</i></p>
		</div>
		<?php if($_SESSION['name'] == '' )
		{
		?>
		<div id="login">
			<form action="login.php" method="post" id="login" onsubmit="return formValidate('login','username', 'password')">
				<table>
					<tr><td>user name:</td>
						<td><input id="username" type="text" name="username"></td>
					<tr><td>password:</td>
						<td><input id="password" type="password" name="pw"></td>
					<tr><td><a href="createAccount.php">register?</a></td>
						<td><button id="Login">login</button></td>
				</table>
			</form>
		</div>
		<?php
		}
		else
			echo "Welcome, ",$_SESSION['name'];
		?>
	</div>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li><a href="blog.php">My Blog</a></li>
			<li><a href="profile.php">My Profile</a></li>
			<li><a href="users.php">Other Blogs</a></li>
			<li><a href="support.php">Support</a></li>
	</div>
