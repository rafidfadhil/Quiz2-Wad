<?php 

$db= new MYSQLI( "localhost". ":"."3306", "root", "", "laundry.sql");
    if($db->connect_error>0){
		die('Connection error');
	}else
	{
		echo'';
	} ;
?>