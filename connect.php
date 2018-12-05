<?php 
session_start();
//connect.php
$server	    = 'localhost';
$username	= 'forum';
$password	= 'changeme';
$database	= 'test';

/*if(!mysqli_connect($server, $username, $password))
{
 	exit('Error: could not establish database connection');
}
if(!mysqli_select_db($database))
{
 	exit('Error: could not select the database');
}*/


$link = mysqli_connect($server, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* return name of current default database */
if ($result = mysqli_query($link, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
    mysqli_free_result($result);
}


?>