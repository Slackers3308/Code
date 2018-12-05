﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 	<meta name="description" content="A short description." />
 	<meta name="keywords" content="put, keywords, here" />
 	<title>PHP-MySQL forum</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="src\css\style.css">
</head>
<body>




<h2>Slackers.me</h2>
	<div id="wrapper">
	<div id="menu" >
		<a class="btn btn-primary themebutton" href="/index.php">Home</a> 
		<a class="btn btn-primary themebutton" href="/create_topic.php">Create a topic</a> 
		<a class="btn btn-primary themebutton" href="/create_cat.php">Create a category</a>
		
		<div id="userbar">
			
			
			
		<?php
		if($_SESSION['signed_in'])
		{
			echo 'Hello <b>' . htmlentities($_SESSION['user_name']) . '</b>. Not you? <a class="btn btn-primary themebutton" href="signout.php">Sign out</a>';
		}
		else
		{
			echo '<a class="btn btn-primary themebutton" href="signin.php">Sign in</a>  <a class="btn btn-primary themebutton" href="signup.php">create an account</a>';
		}
		?>
		</div>
	</div>
		<div id="content">