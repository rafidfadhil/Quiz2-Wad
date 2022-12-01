<?php 

$db=new MYSQLi("localhost","root","","laundry.sql");
    if($db->connect_error>0){
		die('Connection error');
	}else
	{
		echo'';
	} ;
?>