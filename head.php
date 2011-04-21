<?php session_start();
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?>
<script type="text/javascript" language="JavaScript" src="scripts/formValidate.js"></script>
<div id="header">
		<div id="logo">
			<h1><a href="index.php">anti-blog </a></h1>
			<p><i>let's talk</i></p>
		</div>
		<div id="login">
			<form action="login.php" method="post" id="login" onsubmit="return formValidate('login','username', 'password')">
				<table>
					<?php if($_SESSION['name'] == null )
						{
					?>
					<tr><td>user name:</td>
						<td><input id="username" type="text" name="username"></td>
					<tr><td>password:</td>
						<td><input id="password" type="password" name="pw"></td>
					<tr><td><a href="createAccount.php">register?</a></td>
						<td><button id="Login">login</button></td>
					<?php
						}else{
							echo "<br/><br/><br/><br/>";
							

							echo "<td>Welcome, ", $_SESSION['name'], "</td>";
						}
					?>
				</table>
			</form>
		</div>
	</div>
	<div id="menu">
		<ul>
			<li 
				<?php 
					if(strpos($_SERVER['PHP_SELF'], 'index.php')){
						echo ' class="current_page_item"';
					}
				?>
				><a href="index.php">Home</a></li>

			<?php if($_SESSION['name'] != ''){ ?>
				<li
					<?php 
						if(strpos($_SERVER['PHP_SELF'], 'blog.php')){
							echo ' class="current_page_item"';
						}
					?>
					><a href="blog.php">My Blog</a></li>
				<li
					<?php 
						if(strpos($_SERVER['PHP_SELF'], 'addBlog.php')){
							echo ' class="current_page_item"';
						}
					?>
					><a href="addBlog.php">Create Post</a></li>
				<li
					<?php 
						if(strpos($_SERVER['PHP_SELF'], 'profile.php')){
							echo ' class="current_page_item"';
						}
					?>
					><a href="profile.php">My Profile</a></li>
			<?php } ?>
			<li
				<?php 
					if(strpos($_SERVER['PHP_SELF'], 'users.php')){
						echo ' class="current_page_item"';
					}
				?>
				><a href="users.php">Bloggers</a></li>
			<li
				<?php 
					if(strpos($_SERVER['PHP_SELF'], 'support.php')){
						echo ' class="current_page_item"';
					}
				?>
				><a href="support.php">Support</a></li>
			<?php if($_SESSION['name'] != '')
			{ ?>
			<li
				<?php 
					if(strpos($_SERVER['PHP_SELF'], 'logout.php')){
						echo ' class="current_page_item"';
					}
				?>
				><a href="logout.php">Logout</a></li>
			<?php
			}
			?>
	</div>
