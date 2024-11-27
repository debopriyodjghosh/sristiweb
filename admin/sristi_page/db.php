<?php
$servername='localhost';
$username='shibpmpw_develop';
$password='new2020';
$dbname = "shibpmpw_web";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>