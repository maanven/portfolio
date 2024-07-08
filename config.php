<?php


$host="localhost";
$user="shubhan1_assign";
$pass="#include<abc.h>";
$database="shubhan1_assign";

$conn=mysql_connect($host,$user,$pass);
mysql_select_db($database);



if(!$conn)
{
    echo "Error Connecting to the database";
}

?>