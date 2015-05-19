<?php
if($_POST)
{
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
mysql_query("SQL insert statement.......");
}else { }

?>