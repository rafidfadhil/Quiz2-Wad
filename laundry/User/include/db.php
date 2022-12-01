<?php 
$db=new MYSQLi("Localhost","root","","laundry.sql");
    if($db->connect_error>0){
		die('Connection error');
	}else
	{
		echo'';
	} ;
?>