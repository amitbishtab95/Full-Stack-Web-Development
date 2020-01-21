<?php
$hostName='localhost';
$userName='root';
$password='';
$databaseName='CSEB2020';

if(mysqli_connect($hostNamE,$userName,$password,$databaseName)){
	echo 'connection succesfull';
}
else
{
	echo "connection_failed"+ mysqli_connect_error();
}
?>