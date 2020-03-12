<?php
$server="localhost";
$user="root";
$pass="";
$db="hck";
$conn=new mysqli($server,$user,$pass,$db);
//$con=mysqli_connect("127.0.0.1","root","","hck") or die(mysqli_error($con));
//$con=mysqli_connect("localhost","user","","bond") or die(mysqli_error($con));
if(!$conn){
    die ("Error" . $conn->connect_error);
}

//ysql_connect('localhost','root','');
//mysql_select_db('hck');
?>